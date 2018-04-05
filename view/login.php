<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/cardslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/cadastro.css">
		<link rel="stylesheet" href="css/flickity.css" media="screen">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/carrosseis.css">
		<link rel="stylesheet" href="css/carrinho.css">
		<title>Medcare - Home</title>
	</head>

		<style>
			
			@media only screen and (max-width: 768px) {
				#botaocarrinho{
					width: 80%;
				}
				
				#meucarrinho{
					font-size: 29px;
				}
			}

			
			#navprincipal{
				background-color: rgb(38,95,167);
			}
			
			
			#menuitem{
				padding-right: 70px;
			}
			
			/* Colocar uma margem inferior no logo em dispositivos pequenos */
			@media only screen and (max-width: 768px) {
				#iconeLogo{
					margin-bottom: 25px;
				}
			}
			
			/* Fixar o tamanho da barra do menu em dispositivos médios e grandes */
			@media only screen and (min-width: 768px) {
				#navprincipal{
					height: 40px;
				}			
			}

			
			/* Diminuir o padding dos itens do menu em dispositivos até 992px */
			@media only screen and (max-width: 992px) {

				#menuitem{
					padding-right: 35px;
				}
			}
			
			
		</style>

	<body> 
        
		<?php require_once "nav.php"; ?>

		<?php require_once "corpo_login.php"; ?>

		<?php require_once "footer.php"; ?>
				
		<!-- Carregamento de arquivos JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>      
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script> 	<!-- Inclusão do Plugin jQuery Validation-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="js/flickity.pkgd.min.js"></script>
        <script src="js/total.js"></script>
        <script src="js/cadastro.js"></script>

	</body>
</html>