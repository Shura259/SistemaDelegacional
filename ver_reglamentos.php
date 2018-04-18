<style> 
 .img-responsive:hover {
  opacity: 0.65;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  -ms-transition: opacity 500ms;
  transition: opacity 500ms;
}  
	.img-responsive {
	border-radius: 45% / 20%; /* Borde redondeado */
	box-shadow: 0px 0px 15px #000; /* Sombra */
	padding:0;
	-moz-transition: all 1s;
	-webkit-transition: all 1s;
	-o-transition: all 1s;
	}
	.img-responsive:hover {
	border-radius: 0; /* Con esto eliminamos el borde redondeado */
	-moz-transition: all 1s;
	-webkit-transition: all 1s;
	-o-transition: all 1s;
	cursor:pointer;
	}

		.overlayone-border{ 
		margin:0px;
		text-align: center;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 20px;
		padding: 0px;
		width: 468px; 
		height: 150px; 
		display: inline-block;
		position: relative;
		}

		.overlayinn-border {
		background-color: rgba(1, 0, 0, 0.6);
		width: 250px; 
		height: 110px; 
		top: 40px;
		left: 90px; 
		border-radius: 15px 15px 15px 15px; 
		-moz-border-radius: 15px 15px 15px 15px;
		-webkit-border-radius: 15px 15px 15px 15px;
		border: 0px solid #000000;
		opacity: 0;
		position: absolute;
		padding: 20px; 
		transition: opacity .5s;
		text-align: center; 
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 16px;
		color:#ffffff; 
		}
		.overlayinn-border:hover { /* Efecto al pasar el mouse */
		opacity: 5;
		transition: opacity .5s;
		}
</style>
 <html>
	<head>
		<title>Sistema Delegacional</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<?php include("head.php");?>
	</head>
		<body background="">
		<?php include "php/navbar.php"; ?><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
			<!--		<SCRIPT LANGUAGE="JavaScript">
					var txt="Reglamentos Delegacionales";
					var espera=100;
					var refresco=null;
					function rotulo_title() {
							document.title=txt;
							txt=txt.substring(1,txt.length)+txt.charAt(0);
							refresco=setTimeout("rotulo_title()",espera);}
					rotulo_title();
					</SCRIPT>
			-->		<font face=bold 90% monospace; size=6><marquee scrollamount="10" bgcolor="#f0e427">Reglamentos Delegacionales</marquee></font>
						<br><br><br><br><br><br><br>
							<section id="projects">
							<div class="row" align="center">
								<article class="col-md-6">
										<div class="overlayone-border">
											<a href="ver_reglamento_interno.php"><img class="img-responsive" src="./images/imagenn.jpg" height="500"/>
											<div class="overlayinn-border">
											Reglamento Interno de la Comunidad de Guadalupe Tecozautla.
											</div><br><font>Reglamento Interno</font>
											</div>
								</article>
								<article class="col-md-6">
										<div class="overlayone-border">
											<a href="ver_reglamento_ejidal.php"><img class="img-responsive" src="./images/imagen.jpg"  height="500" />
											<div class="overlayinn-border">
											Reglamento Ejidal de la Comunidad de Guadalupe Tecozautla.
											</div><br><font>Reglamento Ejidal</font>
										</div>
								</article>
							</div>
							</section>
							
					 
					</div>
				</div>
			</div>
			<?php include("footer.php");?>
		</body>
</html> 
	
	