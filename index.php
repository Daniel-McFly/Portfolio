<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel's Blog</title>
    <link rel="stylesheet" href="CSS/index.css">
	<link rel="icon" href="img/logo.png">
	<script>
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
  			if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200){
   	 			document.getElementById("nav").style.top = "10px";
				document.getElementById("te").style.top = "15px";
				document.getElementById("nav1").style.top = "10px";
  			} 	
			else {
				document.getElementById("nav").style.top = "-100px";
				document.getElementById("te").style.top = "-105px";
				document.getElementById("nav1").style.top = "-100px";
				
  			}
		}
		function QSE(){
			document.documentElement.scrollTop = 200;
		}
		function tcc(){
			document.documentElement.scrollTop = 900;
		}
	</script>
</head>
<body>
	<?php
		$var = '20';
	?>
    <nav class="nav" id="nav">
        <a href="#"><img src="img/logo.png" width="10%"></a>
      </nav>
      <div class="triangle-end" id="te"></div>
      
      <nav class="nav1" id="nav1">
        <button type="button" onclick="QSE()">QUEM SOU EU</button>
        <button type="button" href="#">Jogos</button>
		<button type="button" href="#">Sobre</button>
	  </nav>
	 
    <div class="titulo">
        
        <br>
        <img src="img/title (3).png" width="40%"" >   
		<br>
		<div id="linkt" class="linkt">
			<button type="button" onclick="QSE()">QUEM SOU EU</button>
        	<button type="button" href="#">JOGOS</button>
			<button type="button" href="#">SOBRE</button>
		</div>
	</div>
	<br>
	
    <div class="esquerdas">
		<br>
		<h1><center>Quem sou eu?</center></h1>
		<BR>
		<p>Sou programador Full Stack, recém formado em técnico de Desenvolvimento de Sistemas na Etec Jaraguá(Escola técnica do Jaraguá),
		cujo fui eleito pelos professores como aluno destaque.</p>

		<p>Tenho 17 anos, por isso minha experiência profissional é bem limitada, 
		onde só trabalhei com uma empresa pequena no <button class="btntcc" type="button" onclick="tcc()">TCC</button>, onde fui responsavel pelo Back-End.</p>

		<p>Sei programar nas linguagens C#, JavaScript, PHP e Python. 
		Também sei HTML5 e CSS3. Estou estudando e sempre tentando ir atrás de novas ferramentas.</p>

    </div>

	<div class="direitas">
		<h1><center>Habilidades</center></h1>
		<BR>
		<p>PHP</p>
		<p>JavaScript </p>
		<p>C#</p>
		<p>HTML</p>
		<p>CSS</p>
		<p>Banco de dados MySQL</p>
	</div>
	<script>
		window.location = "#wall-1";
	</script>
	<div class="faixa">
		<h1>Meus Objetivos</h1>
		<div class="container">
			<div class="wall wall-1" id="wall-1">
				<div class="setesq"><a href="#wall-3"><button><</button></a></div>
				<div class="carrcen"><a href='PDF/cd.pdf' download='imagem' target='_blank'>Download</a></div>
				<div class="setdir"><a href="#wall-2"><button>></button></a></div>
			</div>
		
			<div class="wall wall-2" id="wall-2">
				<div class="setesq"><a href="#wall-1"><button><</button></a></div>
				<div class="carrcen"><h1>carrosel numero - 2</h1></div>
				<div class="setdir"><a href="#wall-3"><button>></button></a></div>
			</div>
		
			<div class="wall wall-3" id="wall-3">
				<div class="setesq"><a href="#wall-2"><button><</button></a></div>
				<div class="carrcen"><h1>carrosel numero - 3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
					</h1></div>
				<div class="setdir"><a href="#wall-1"><button>></button></a></div>
			</div>
		</div>
	</div>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/UEUpKV5OIqc?start=282" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	<br>
	<img src="img/star-lord-from-guardians-of-the-galaxy_2560x1440_xtrafondos.com (2).jpg" width="100%">

</body>
</html>