@extends('layout.head_footer') 

@section('title', 'VEG EXPERIÊNCIA')

@section('footer')

<!-- Menu -->
		<nav id="nav">
			<!-- Logo da Veg Experience localizado no menu -->
			<a href="/ ">
				<img id="logo-menu" src="img/logo-veg.png" alt="logo da Veg Experience"/> 
			</a>

			<!-- Navegação -->
			<div id="navegacao">
				<a class="a-menu" href="index.html">HOME</a>
				<a class="a-menu"  href="index.html#pag-quemsomos">QUEM SOMOS</a>
				<a class="a-menu"  href="index.html#pag-pilares">PILARES</a>
				<a class="a-menu"  href="index.html#pag-historia">HISTÓRIA</a>
				<a class="button" id="link-eventos" href="/eventos">EVENTOS</a>
			</div>
		</nav>
		
		<!-- Página de Login -->
		<section id="pag-login">

			<h1>ENTRAR</h1>

			<form name="" method="" action="">
				
				<!-- Campo: e-mail -->
				<label for="email">E-MAIL:</label>
				<input id="email" type="email" name="email" placeholder="nomeusuario@email.com" />

				<!-- Campo: senha -->
				<label for="senha">SENHA:</label>
				<input id="senha" type="password" name="senha" placeholder="somente números" />

				<!-- Botão de enviar e cancelar -->
				<div id="btn-form">
					<input type="submit" name="bnt-ENVIAR" value="ENVIAR" />
					<input id="btn-cancelar" type="reset" name="bnt-CANCELAR" value="CANCELAR" />	
				</div> 

				<!-- Botão de entrar com google e com email -->
				<div class="alternative-login">
				   <button class="google-btn"><img id="icon-google" src="img/google-icon.png">Continuar com Google</button>
				   <button class="email-btn"><img id="icon-email" src="img/email-icon.png">Continuar com e-mail</button>
				</div> 

				<p><a href=>Esqueceu a senha?</a></p>

				<p >Não tem conta?<a href="cadastro.html">cadastre-se</a></p >
			</form>
		</section>
@endsection