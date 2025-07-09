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

// Instanciando as classes
const scrollHandlerIndex = new ScrollHandler('#nav-index', 'rolagem', 650);
const scrollHandlerEvent = new ScrollHandler('#nav-event', 'rolagem', 400);
const mobileMenu = new MobileMenu('.icon', '.menu-mobile', 'img/menu_yellow_36dp.webp', 'img/close_yellow_36dp.webp');
const search = new Search('search', '.outros', 'no-results');