@extends('layout.head_footer') 

@section('title', 'VEG EXPERIÊNCIA')

@section('footer')

		<nav id="nav-index">
			<!-- Logo da Veg Experience localizado no menu -->
			<div id="logoAndMenu">
				<a href="#">
					<img id="logo-menu" src="img/logo-veg-colorida.webp" alt="logo da Veg Experience"/> 
				</a>

				<!-- Navegação -->
				<ul id="navegacao">
					<li><a class="a-menu" href="#header">HOME</a></li>
					<li><a class="a-menu"  href="#pag-quemsomos">QUEM SOMOS</a></li>
					<li><a class="a-menu"  href="#pag-pilares">PILARES</a></li>
					<li><a class="a-menu"  href="#pag-historia">HISTÓRIA</a></li>
					<li><a class="button" id="link-eventos" href="/event">EVENTOS</a></li>
				</ul>

				<!--Menu hambúrguer-->
				<div class="mobile-menu-icon">
					<button class="icon">
						<img src="img/menu_yellow_36dp.webp" alt="Menu Icon">
					</button>
				</div>
			</div>

		<div class="menu-mobile">
			<ul id="navegacao2">
				<li><a class="a-menu" href="#header">INICIO</a></li>
				<li><a class="a-menu"  href="#pag-quemsomos">QUEM SOMOS</a></li>
				<li><a class="a-menu"  href="#pag-pilares">PILARES</a></li>
				<li><a class="a-menu"  href="#pag-historia">HISTÓRIA</a></li>
				<li class="botao-eventos"><a class="button" id="link-eventos" href="event.html">EVENTOS</a></li>
			</ul>
		</div>
		</nav>

		<!-- Banner -->
		<header id="header">
			<img id="img-banner" src="img/banner.svg" alt="Logo da Veg Experience no centro, escrito Veg Experience, o futuro é consciente e sustentável" />
		</header>

		<!-- Seção de notícias -->
		<section class="secao-noticias" id="pag-noticias">
			<div class="container-carrossel">
				
				<button id="prevBtn" class="arrow-carrossel" aria-label="Notícia Anterior">
				<img src="img/arrow-back-carrossel.svg" alt="Seta para a esquerda">
				</button>

				<div class="lista-wrapper-noticias">
				
				<ul id="cardList" class="card-list-noticias">

					<li class="card-noticia">
					<div class="conteudo-card-noticias">
						<h3>Título da Notícia 1</h3>
						<p>Este é o conteúdo da primeira notícia. A Veg Experience sempre trazendo novidades sobre sustentabilidade e bem-estar.</p>
						<a class="button" href="#">Ver mais</a>
					</div>
					<img src="img/foto-noticia.jpg" alt="Descrição da imagem da notícia 1.">
					</li>

					<li class="card-noticia">
					<div class="conteudo-card-noticias">
						<h3>Descobertas na Culinária Plant-Based</h3>
						<p>Nossos chefs exploram novos ingredientes e técnicas para revolucionar a alimentação à base de plantas. Confira as receitas.</p>
						<a class="button" href="#">Ver mais</a>
					</div>
					<img src="img/foto-noticia.jpg" alt="Mesa com vários pratos veganos.">
					</li>
					
					<li class="card-noticia">
					<div class="conteudo-card-noticias">
						<h3>Evento de Yoga e Meditação</h3>
						<p>Participe do nosso próximo evento que une corpo e mente. Uma jornada de autoconhecimento e conexão com a natureza.</p>
						<a class="button" href="#">Ver mais</a>
					</div>
					<img src="img/foto-noticia.jpg" alt="Pessoas praticando yoga ao ar livre.">
					</li>

				</ul>
				</div>
				
				<button id="nextBtn" class="arrow-carrossel" aria-label="Próxima Notícia">
				<img src="img/arrow-forward-carrossel.svg" alt="Seta para a direita">
				</button>

			</div>
		</section>

		<!-- Seção quem somos -->
		<main id="pag-quemsomos">
			<img id="salada" 
			src="img/salada.svg" 
			alt="" 
			data-scroll-animate 
			data-scroll-translate-range="-150"
			data-scroll-rotate-range="40" />
			<div id="txt-quemsomos">
				<h2>Quem somos</h2>
				
				<p>Nós somos a Veg Experience, pois acreditamos que o futuro é consciente e sustentável.<br><br>
					Falamos sobre longevidade sustentável através de 13 dos 17 Objetivos do Desenvolvimento Sustentável da Agenda 2030 da ONU.<br><br>
					Promovemos  eventos interativos que buscam incentivar e conscientizar sobre a  importância da prática da atividade física e da alimentação a base de  plantas, associado com ações sustentáveis cotidianas.<br><br>
				</p>
				<div id="p-destaque"><p>Acreditamos  que cuidando de nós, na nossa individualidade, cuidamos de tudo e de  todos que são importantes para nós, pois estamos e somos todos um só.</p></div>
			</div>

			<img id="foto-quemsomos" src="img/foto-quemsomos.jpg" alt="" />
		</main>

		<!-- Seção de Pilares -->
		<section class="secao-pilares" id="pag-pilares">

			<div class="texto-intro-pilares">
				<h2 data-scroll-animate data-scroll-translate-range="50">Pilares</h2>
				<p>Pautada na diretriz 12.8, do 12º Objetivo do Desenvolvimento Sustentável da ONU, e inspirado no conceito das Zonas Azuis, a Veg Experience busca promover a longevidade sustentável através da conscientização e do incentivo a práticas de atividade física, da alimentação à base de plantas e da gestão dos resíduos sólidos. Pois, acredita que, para o desenvolvimento de uma longevidade saudável é necessário hábitos saudáveis e sustentáveis, em um mundo igualmente saudável e sustentável.</p>
				<p>Por meio de uma abordagem multisetorial e multidisciplinar, busca-se conectar ações que promovam o desenvolvimento da economia local, a saúde humana e a sustentabilidade ambiental. Incentivando, assim, um estilo de vida saudável que atua de forma a integrar a prática esportiva, a alimentação à base de plantas e ações sustentáveis. Para isso, faz-se necessário estreitar relações com a sociedade civil, empresas públicas e privadas e demais organizações que estejam igualmente alinhadas aos objetivos do bem estar humano, da segurança alimentar e nutricional e, o desenvolvimento de cidades e práticas sustentáveis.</p>
				<p>Com o intuito de promover o veganismo no seu conceito mais amplo, o qual vai além da alimentação sem carne, mas trata, sobretudo, de um estilo de vida político e filosófico contra toda e qualquer forma de exploração de vida, seja ela animal ou humana, e que perpassa por questões ambientais. Portanto, ao promover uma “experiência vegana”, busca-se conscientizar e informar sobre os respeito à vida humana, animal e planetária. E a Veg Experience intercala essas vertentes em seus pilares da seguinte forma:</p>
			</div>

			<div class="container-pilares">

				<div class="card-pilar card-pilar--atividade-fisica">
					<img class="img-card" src="img/atividadefisica.jpg" alt="Pessoa se alongando ao ar livre ao pôr do sol" />
					<div class="card-texto">
						<p>Atividade física</p>
					</div>
				</div>

				<div class="card-pilar card-pilar--sustentabilidade">
					<img class="img-card" src="img/Sustentabilidade.jpg" alt="Mãos segurando uma pequena planta brotando da terra" />
					<div class="card-texto">
						<p>Sustentabilidade</p>
					</div>
				</div>
				
				<div class="card-pilar card-pilar--alimentacao">
					<img class="img-card" src="img/alimentacao-a-base-de-plantas.jpg" alt="Tigela colorida com salada e vegetais frescos" />
					<div class="card-texto">
						<p>Alimentação a base de plantas</p>
					</div>
				</div>

			</div>
		</section>

		<!-- Seção de História da Veg Experience -->
		<section class="secao-historia" id="pag-historia">
    
			<div class="box-historia">
				
				<div class="texto-historia">
					<h2>Nossa história</h2>
					<p>A Veg Experience nasceu de um encontro entre duas mulheres que buscam ser a diferença que querem ver no mundo. Angelita Pereira, idealizadora do projeto, é vegana, triatleta amadora, internacionalista e mestre em geografia. Com diagnóstico de uma doença degenerativa, escolheu <strong>cuidar de si, para cuidar de quem é importante para ela</strong>, promovendo o autocuidado através de práticas esportivas, da alimentação a base de vegetais e do cuidar com o meio ambiente, consciente de que somos parte de todo o tecido que compõe o nosso planeta, portanto, cada ação individual afeta o outro, os animais e o planeta.</p>
					<p>O mesmo acredita e vivi a vice-fundadora Letícia Souza, vegetariana, nutricionista, especialista em alimentação vegana e vegetariana, que atua na gestão das mídias sociais.</p> 
					<p>Os primeiros eventos foram no mundo da moda consciente, através do projeto #VegBem40, como parte da campanha de aniversário da Big Boss. Realizamos desfiles e oficinas que promovessem discussão e reflexões sobre a importância da atividade física, da alimentação saudável, da inclusão social e da moda consciente. Tivemos o privilégio de sermos aprovadas no programa de encubação da TXM, em parceria com o IFB, SEBRAE e FINATEC, o que mudou totalmente o olhar e o propósito da Veg. Então, surge, no final de 2024 a Veg Experience, promovendo eventos multidisciplinares em prol da longevidade sustentável, pois não basta envelhecermos bem, é necessário um mundo igualmente saudável.</p>
				</div>

				<div class="container-historia">
					<img src="img/foto-historia.jpg" alt="Fundadoras da Veg Experience sorrindo em um evento" />
					<img src="img/foto-historia2.jpg" alt="Prato de comida vegana servido durante uma oficina" />
					<img src="img/foto-historia3.jpg" alt="Participantes em um evento de moda consciente" />
					<img src="img/foto-historia4.jpg" alt="Detalhe de um produto sustentável da Veg Experience" />
				</div>

			</div>
		</section>

		<!-- Seção de apoiadores -->
		<section id="pag-apoiadores">
			
				<h2>Apoiadores</h2>
			
			<div id="container-apoiadores">
				<img id="deligusta" class="foto-apoiadores" src="img/deligusta_black.png" alt="" />
				<img id="greenpeace" class="foto-apoiadores" src="img/grupo voluntários bsb.jpg" alt="" />
				<img class="foto-apoiadores" src="img/lixo_ao_luxo.png" alt="" />
				<img class="foto-apoiadores" src="img/uniter.jpg" alt="" />
				<img class="foto-apoiadores" src="img/logo-if.png" alt="" />
			</div>
		</section>

		    <!-- Botão flutuante do whatsapp e instagram -->
			<div id="whatsapp-e-instagram">
				<a href="https://api.whatsapp.com/send?phone=5561981677132" target="_blank"><img id="botao-whatsapp" src="img/botao-whatsapp.png" alt="Ícone do Whatsapp" /></a>
				<a href="https://www.instagram.com/experience.veg/" target="_blank"><img id="botao-instagram" src="img/botao-instagram.png" alt="Ícone do instagram" /></a>
			</div>

@endsection
