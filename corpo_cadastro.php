<form class="modal-content" action="" id="formCadastro" style="margin-top: 35px">
	<div class="container">
		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<button type="button" class="btn btn-primary disabled">CADASTRO</button>
			</div>
	
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<a href="login.php"><button type="button" class="btn btn-outline-primary">LOGIN</button></a>
			</div>
			
		
			<div class="col-sm-12">
			  </br>
			  <label for="email">e-mail</label>
			  <input type="text" id="email" placeholder="Ex. joaodasilva@gmail.com" name="email">
			  </br>
			  
			  <label for="psw">senha</label>
			  
			  <input type="password" id="senha" placeholder="" name="psw">
			
			  <label for="cpf">CPF</label>
			  <input type="number" id="cpf" placeholder="Ex. 123.456.789-12" name="cpf">

			  <label for="nome">seu nome</label>
			  <input type="text" id="nome" placeholder="Ex. Leonardo" name="nome">

			  <label for="dtnasc">data de nascimento</label><br>
			  <input type="date" id="dtnasc" placeholder="Ex. 01/01/1999" name="dtnasc"><br>

			  <label for="sexo">sexo</label><br>
			  <input type="radio" name="sexo" value="masc" checked>Masculino
			  <input type="radio" name="sexo" value="fem">Feminino<br><br>

			  <label for="tel">telefone</label>
			  <input type="number" id="tel" placeholder="Ex. (99) 99999-9999" name="tel">

			  <div class="clearfix">
				<div class="text-center">
					<input type="button" id="salvar" class="btn btn-outline-primary" value="CRIAR CADASTRO"><br>
				</div>
			  </div>
			  <div id="mensagem_erro"></div>
			  <div id="insere_aqui"></div>
			</div>
		</div>
	</div>				
</form>	