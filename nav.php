<?php

	$connection = mysqli_connect('localhost','root','','farma_senac');
	$sql_statement = $connection->prepare("SET names 'utf8'; ");
	$sql_statement->execute();

	if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['nome']) == true))
{
    unset($_SESSION['email']);
	unset($_SESSION['senha']);
	unset($_SESSION['nome']);
    }else{
		$logado = $_SESSION['nome'];
		//echo $logado;	
	}
?>


<!-- Logo, barra de buscas e botão para buscar -->

<div class="container">

    <div class="form-group row" style="margin-top: 15px">
		
		<!-- Logo -->
		
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">	<!-- No Bootstrap 4 col-* é o mesmo que col-xs-* -->
            <a href="index.php" class="url"><img id="iconeLogo" class="mx-auto d-block" src="img/med1.png" height= 80px></a>			<!-- Inserir e centralizar a imagem no bloco -->
        </div>
		
        <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12 col-12">	<!-- No Bootstrap 4 col-* é o mesmo que col-xs-*  class="mx-auto d-block" -->

			<div class="form-group row">
		
				<!-- Olá, visitante! Cadastro/login -->
				
				<div class="col-xl-6 col-lg-6 col-md-8 d-none d-md-block">
				<?php  
					if(isset($logado)){
				?>
					<label><p class"a">Usuario Logado: <?php echo @$logado; ?><a href="logout.php"> Logout</a></li></p></label>
					<?php }else{ ?>
						Bem Vindo Visitante! <a href="cadastro.php">Cadastro</a> ou <a href="login.php">Login</a>
					<?php } ?>
				</div>
				
				<!-- Atendimento, meus pedidos, meu perfil e carrinho -->
				
				<div class="col-xl-6 col-lg-6 col-md-4 d-none d-md-block text-right">

					<a href="carrinho.php"><img src="img/carticon.png" height="30px" style="margin-right: 15px"/></a>
					<a href=""><img src="img/profileicon.png" height="30px" style="margin-right: 15px"/></a>
					<a href="index.php#footer"><img src="img/contacticon.png" height="28px"/></a>
					
				</div>

				<!-- Barra de buscas -->

				<form action="buscas.php" method="post" style="width: 100%">
						
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-11 col-11 mx-auto">
						<div class="input-group">	<!-- Utilizamos input group para colocar o input e o botão na mesma linha -->
								<input class="form-control" id="divBusca_2" name="search" required type="text" style="margin-right: 5px" />
								<input class="btn btn-primary" id="divBusca" type="submit" value="Buscar" />
						</div>
					</div>
				
				</form>
				
			</div>

		</div>
		
	</div>
	
</div>


<!-- Nav para telas maiores -->

<nav class="navbar navbar-expand-md navbar-dark" id="navdesktop">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_desktop" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapse_desktop">
	
		<ul class="navbar-nav" style="float: none; margin: 0 auto">
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="medicamentos.php" style="color: white">Medicamentos</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="beleza.php" style="color: white">Beleza</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="infantil.php" style="color: white">Infantil</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="promocoes.php" style="color: white">Promoções</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="cuidadosdiarios.php" style="color: white">Cuidados Diários</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="genericos.php" style="color: white">Genéricos</a>
			</li>
			
		</ul>
	
	</div>
	
</nav>


<!-- Nav para telas menores -->

<nav class="navbar navbar-expand-md navbar-dark" id="navmobile">    <!-- style="background-color: red"  -->

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_mobile" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapse_mobile">
	
		<ul class="navbar-nav" style="float: none; margin: 0 auto">
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="medicamentos.php" style="color: white">Medicamentos</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="beleza.php" style="color: white">Beleza</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="infantil.php" style="color: white">Infantil</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="promocoes.php" style="color: white">Promoções</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" id="menuitem" href="cuidadosdiarios.php" style="color: white">Cuidados Diários</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="genericos.php" style="color: white">Genéricos</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="cadastro.php" style="color: white">Cadastro</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="Login.php" style="color: white">Login</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="carrinho.php" style="color: white">Meu Carrinho</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="" style="color: white">Meu Perfil</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="index.php#footer" style="color: white">Contato</a>
			</li>
			
		</ul>
	
	</div>
	
</nav>