class ScrollHandler {
    constructor(menuId, scrollClass, scrollThreshold) {
        this.menu = document.querySelector(menuId);
        this.scrollClass = scrollClass;
        this.scrollThreshold = scrollThreshold;
        this.init();
    }

    init() {
        window.addEventListener('scroll', () => this.toggleMenuOnScroll());
    }

    toggleMenuOnScroll() {
        if (this.menu) {
            this.menu.classList.toggle(this.scrollClass, window.scrollY > this.scrollThreshold);
        }
    }
}

class MobileMenu {
    constructor(iconSelector, menuSelector, openIcon, closeIcon) {
        this.icon = document.querySelector(iconSelector);
        this.menuMobile = document.querySelector(menuSelector);
        this.openIcon = openIcon;
        this.closeIcon = closeIcon;
        this.init();
    }

    init() {
        if (this.icon) {
            this.icon.addEventListener('click', () => this.toggleMenu());
        }
    }

    toggleMenu() {
        if (this.menuMobile.classList.contains('open')) {
            this.menuMobile.classList.remove('open');
            this.icon.querySelector('img').src = this.openIcon;
        } else {
            this.menuMobile.classList.add('open');
            this.icon.querySelector('img').src = this.closeIcon;
        }
    }
}

class Search {
    constructor(searchInputId, cardContainerSelector, noResultsId) {
        this.searchInput = document.getElementById(searchInputId);
        this.items = document.querySelectorAll(`${cardContainerSelector} .card`);
        this.noResults = document.getElementById(noResultsId);
        this.init();
    }

    init() {
        if (this.searchInput) {
            this.searchInput.addEventListener('input', (event) => this.filterItems(event));
        }
    }

    filterItems(event) {
        const value = this.formatString(event.target.value);
        let hasResults = false;

        this.items.forEach(card => {
            const cardText = this.formatString(card.textContent || card.innerText);
            if (cardText.includes(value)) {
                card.style.display = 'flex';
                hasResults = true;
            } else {
                card.style.display = 'none';
            }
        });

        if (this.noResults) {
            this.noResults.style.display = hasResults ? 'none' : 'block';
        }
    }

    formatString(value) {
        return value.toLowerCase().trim().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }
}

class Carousel_noticias {
  // O construtor é executado quando criamos um novo carrossel (new Carousel(...))
  constructor(prevButtonId, nextButtonId, cardListId) {
    // 1. Seleciona os elementos específicos para esta instância do carrossel
    this.prevButton = document.getElementById(prevButtonId);
    this.nextButton = document.getElementById(nextButtonId);
    this.cardList = document.getElementById(cardListId);

    // Se algum elemento essencial não for encontrado, o carrossel não é iniciado
    if (!this.prevButton || !this.nextButton || !this.cardList) {
      console.error("Um ou mais elementos do carrossel não foram encontrados. Verifique os IDs.");
      return;
    }
    
    this.cards = this.cardList.querySelectorAll('.card-noticia');
    
    // 2. Define o estado inicial
    this.currentIndex = 0;
    this.totalCards = this.cards.length;

    // 3. Vincula os eventos e inicia o carrossel
    this._bindEvents();
    this.updateCarousel();
  }

  // Método "privado" para vincular os eventos aos botões
  _bindEvents() {
    // Usamos .bind(this) para garantir que 'this' dentro dos métodos de clique
    // se refira à instância da classe Carousel, e não ao botão clicado.
    this.prevButton.addEventListener('click', this._handlePrevClick.bind(this));
    this.nextButton.addEventListener('click', this._handleNextClick.bind(this));
  }

  // Lógica para o botão "Anterior"
  _handlePrevClick() {
    this.currentIndex = (this.currentIndex - 1 + this.totalCards) % this.totalCards;
    this.updateCarousel();
  }

  // Lógica para o botão "Próximo"
  _handleNextClick() {
    this.currentIndex = (this.currentIndex + 1) % this.totalCards;
    this.updateCarousel();
  }

  // Método principal que move a "pista" do carrossel
  updateCarousel() {
    const offset = -this.currentIndex * 100;
    this.cardList.style.transform = `translateX(${offset}%)`;
  }
}

/**
 * Classe ScrollAnimator v2.0
 * Anima elementos APENAS quando eles estão visíveis na tela.
 * Usa IntersectionObserver para performance e calcula a animação
 * com base no progresso de visibilidade do elemento no viewport.
 */
class ScrollAnimator {
  constructor(element) {
    this.element = element;
    this.isActive = false; // Flag para saber se o elemento está na tela

    // --- Lê as configurações do HTML ---
    // Define o alcance MÁXIMO do movimento em pixels.
    this.translateRange = parseFloat(this.element.dataset.scrollTranslateRange) ?? 0;
    // Define o alcance MÁXIMO da rotação em graus.
    this.rotateRange = parseFloat(this.element.dataset.scrollRotateRange) ?? 0;
  }

  // O método update agora calcula tudo internamente, sem depender da rolagem total.
  update() {
    // Só executa o código se o IntersectionObserver disse que o elemento está ativo.
    if (!this.isActive) return;

    // Pega as dimensões e a posição do elemento em relação à tela.
    const rect = this.element.getBoundingClientRect();
    const viewportHeight = window.innerHeight;

    // Calcula o progresso (de 0 a 1) da passagem do elemento pela tela.
    // 0 = O topo do elemento está no fundo da tela.
    // 1 = O topo do elemento está no topo da tela.
    let progress = (viewportHeight - rect.top) / viewportHeight;

    // Garante que o progresso fique sempre entre 0 e 1 para evitar animações exageradas.
    progress = Math.max(0, Math.min(1, progress));

    // Calcula o movimento e a rotação atuais com base no progresso.
    const currentTranslate = progress * this.translateRange;
    const currentRotate = progress * this.rotateRange;

    // Monta a string de transformação.
    let transformString = '';
    if (this.translateRange !== 0) {
      // Nota: A direção (vertical/horizontal) foi removida para simplificar.
      // O sinal do 'translateRange' (+ ou -) agora define a direção.
      transformString += `translateY(${currentTranslate}px) `;
    }
    if (this.rotateRange !== 0) {
      transformString += `rotate(${currentRotate}deg)`;
    }

    this.element.style.transform = transformString;
  }

  // --- MÉTODOS ESTÁTICOS (Controlam tudo) ---

  static animatedElements = new Map(); // Usando um Map para facilitar a busca
  static intersectionObserver;

  static init(selector = '[data-scroll-animate]') {
    // 1. Cria o IntersectionObserver.
    // A função dele é simples: mudar a flag 'isActive' de cada instância.
    this.intersectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const instance = this.animatedElements.get(entry.target);
        if (instance) {
          instance.isActive = entry.isIntersecting;
        }
      });
    });

    // 2. Encontra todos os elementos a serem animados.
    const elementsToAnimate = document.querySelectorAll(selector);
    elementsToAnimate.forEach(element => {
      const animatorInstance = new ScrollAnimator(element);
      // Adiciona a instância e seu elemento ao Map.
      this.animatedElements.set(element, animatorInstance);
      // Pede para o Observer "observar" este elemento.
      this.intersectionObserver.observe(element);
    });

    // 3. Continua usando um único "ouvinte" de rolagem para performance.
    window.addEventListener('scroll', this._updateAll.bind(this));
    this._updateAll();
  }

  // O método de update agora apenas chama o update de cada instância.
  static _updateAll() {
    for (let instance of this.animatedElements.values()) {
      instance.update();
    }
  }
}

// Instanciando as classes
const scrollHandlerIndex = new ScrollHandler('#nav-index', 'rolagem', 650);
const scrollHandlerEvent = new ScrollHandler('#nav-event', 'rolagem', 400);
const mobileMenu = new MobileMenu('.icon', '.menu-mobile', 'img/menu_yellow_36dp.webp', 'img/close_yellow_36dp.webp');
const search = new Search('search', '.outros', 'no-results');

document.addEventListener('DOMContentLoaded', () => {
    ScrollAnimator.init();
  const carrosselDeNoticias = new Carousel_noticias('prevBtn', 'nextBtn', 'cardList');
});