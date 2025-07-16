@extends('layout.head_footer') 

@section('title', 'VEG EXPERIÊNCIA')

@section('footer')

		<nav id="nav-index">
			<!-- Logo da Veg Experience localizado no menu -->
			<div id="logoAndMenu">
				<a href="#">
					<img id="logo-menu" src="img/logo-veg.png" alt="logo da Veg Experience"/> 
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
			<img id="img-banner" src="img/banner.jpg" alt="Logo da Veg Experience no centro, escrito Veg Experience, o futuro é consciente e sustentável" />
		</header>

		<!-- Seção de notícias -->
		<section id="pag-noticias">
			<img id="foto-noticia" src="img/foto-noticia.jpg" alt="" />

			<div id="texto-noticia">
				<h1>O Brasil tem mais de 2.900 locais com opções para quem segue uma alimentação baseada em vegetais</h1>

				<p>O veganismo é um movimento e estilo de vida que tem como base eliminar o consumo de produtos de origem animal, incluindo alimentos, cosméticos e vestuário</p>
				
				<p>O Brasil, inclusive, é o país com a maior oferta vegana da América Latina. São mais de 2.900 opções de restaurantes e estabelecimentos veganos no país, e São Paulo e Rio de Janeiro lideram como as cidades mais vegan-friendly.
					Mas não é qualquer estabelecimento que não utiliza produtos de origem animal que pode ser considerado vegano - existe uma regulamentação. A Sociedade Vegetariana Brasileira criou um selo de certificação para produtos de diversas categorias, como alimentos, cosméticos, higiene, limpeza e calçados.</p>
			</div>
		</section>

		<!-- Seção quem somos -->
		<main id="pag-quemsomos">
			<div id="txt-quemsomos">
				<h2>Quem somos</h2>
				
				<p>Nós somos a Veg Experience, pois acreditamos que o futuro é consciente e sustentável.
					Falamos sobre longevidade sustentável através de 13 dos 17 Objetivos do Desenvolvimento Sustentável da Agenda 2030 da ONU.
					Promovemos  eventos interativos que buscam incentivar e conscientizar sobre a  importância da prática da atividade física e da alimentação a base de  plantas, associado com ações sustentáveis cotidianas.
					Acreditamos  que cuidando de nós, na nossa individualidade, cuidamos de tudo e de  todos que são importantes para nós, pois estamos e somos todos um só.</p>
			</div>

			<img id="foto-quemsomos" src="img/foto-quemsomos.jpg" alt="" />
		</main>

		<!-- Seção de Pilares -->
		<section id="pag-pilares">

				<h2>Pilares</h2>

				<p class="p-pilares">Pautada na diretriz 12.8, do 12º Objetivo do Desenvolvimento Sustentável da ONU, e inspirado no conceito das Zonas Azuis, a Veg Experience busca promover a longevidade sustentável através da conscientização e do incentivo a práticas de atividade física, da alimentação à base de plantas e da gestão dos resíduos sólidos. Pois, acredita que, para o desenvolvimento de uma longevidade saudável é necessário hábitos saudáveis e sustentáveis, em um mundo igualmente saudável e sustentável.</p>
				<p class="p-pilares">Por meio de uma abordagem multisetorial e multidisciplinar, busca-se conectar ações que promovam o desenvolvimento da economia local, a saúde humana e a sustentabilidade ambiental. Incentivando, assim, um estilo de vida saudável que atua de forma a integrar a prática esportiva, a alimentação à base de plantas e ações sustentáveis. Para isso, faz-se necessário estreitar relações com a sociedade civil, empresas públicas e privadas e demais organizações que estejam igualmente alinhadas aos objetivos do bem estar humano, da segurança alimentar e nutricional e, o desenvolvimento de cidades e práticas sustentáveis.</p>
				<p class="p-pilares">Com o intuito de promover o veganismo no seu conceito mais amplo, o qual vai além da alimentação sem carne, mas trata, sobretudo, de um estilo de vida político e filosófico contra toda e qualquer forma de exploração de vida, seja ela animal ou humana, e que perpassa por questões ambientais. Portanto, ao promover uma “experiência vegana”, busca-se conscientizar e informar sobre os respeito à vida humana, animal e planetária. E a Veg Experience intercala essas vertentes em seus pilares da seguinte forma:</p>
			<!-- Conteiner para alinhar os cards -->
			<div id="container-pilares">
				<!-- Card 2 -->
				<div id="card2">
					<img class="img-card" src="img/Sustentabilidade.jpg" />
					<div class="card-texto">
						<p>Sustentabilidade</p>
					</div>
				</div>
			   
			   <!-- Card 3 -->
				<div id="card3">
					<img class="img-card" src="img/alimentacao-a-base-de-plantas.jpg" />
					<div class="card-texto">
						<p>Alimentação a base de plantas</p>
					</div>
				</div>
				
				<!-- Card 1 -->
				<div id="card">
					<img class="img-card" src="img/atividadefisica.jpg" />
					<div class="card-texto">
						<p>Atividade física</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Seção de História da Veg Experience -->
		<section id="pag-historia">
			
			<h2>Nossa história</h2>

			<div id="box-historia">
			<div id="texto-historia">
				<p>A Veg Experience nasceu de um encontro entre duas mulheres que buscam ser a diferença que querem ver no mundo. Angelita Pereira, idealizadora do projeto, é vegana, triatleta amadora, internacionalista e mestre em geografia. Com diagnóstico de uma doença degenerativa, escolheu <strong>cuidar de si, para cuidar de quem é importante para ela</strong>, promovendo o autocuidado através de práticas esportivas, da alimentação a base de vegetais e do cuidar com o meio ambiente, consciente de que somos parte de todo o tecido que compõe o nosso planeta, portanto, cada ação individual afeta o outro, os animais e o planeta.</p>  <p>O mesmo acredita e vivi a vice-fundadora Letícia Souza, vegetariana, nutricionista, especialista em alimentação vegana e vegetariana, que atua na gestão das mídias sociais.</p> 
					<p>Os primeiros eventos foram no mundo da moda consciente, através do projeto #VegBem40, como parte da campanha de aniversário da Big Boss. Realizamos desfiles e oficinas que promovessem discussão e reflexões sobre a importância da atividade física, da alimentação saudável, da inclusão social e da moda consciente.
					Tivemos o privilégio de sermos aprovadas no programa de encubação da TXM, em parceria com o IFB, SEBRAE e FINATEC, o que mudou totalmente o olhar e o propósito da Veg. Então, surge, no final de 2024 a Veg Experience, promovendo eventos multidisciplinares em prol da longevidade sustentável, pois não basta envelhecermos bem, é necessário um mundo igualmente saudável.</p>
			</div>

			<div id="container-historia">
				<div class="linha-historia">
					<div class="coluna-historia">
						<img src="img/foto-historia.jpg" alt="" />
					</div>
					<div class="coluna-historia">
						<img src="img/foto-historia2.jpg" alt="" />
					</div>
				</div>
				<div class="linha-historia">
					<div class="coluna-historia">
						<img src="img/foto-historia3.jpg" alt="" />
					</div>
					<div class="coluna-historia">
						<img src="img/foto-historia4.jpg" alt="" />
					</div>	
				</div>
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
