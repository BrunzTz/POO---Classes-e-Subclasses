<?php  
require_once 'ServicosClass.php';
require_once 'InternetClass.php';
require_once 'TelefoniaClass.php';
require_once 'TvClass.php';

?>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylerodape.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Comunicação</title>
  </head>

  <style type="text/css">
  	
  	.fundo{
  		background: linear-gradient(#024059,#025E73,#0396A6);
  		color: white;
  	}

  	.dif-letra{
  		font-family: 'Rubik Mono One', sans-serif;
  		color: #F2B705;
  	}

  	label{
  		cursor: pointer;
  	}

  	hr{

  		background: white;
  		color: white;
  	}

  	.grad-b{
  		background: linear-gradient(#000000, #000014);
  	}

  	a{
  		text-decoration: none;
  	}
  	.internet{
  		color: #00FFD5;
  		font-family: Arial;
  		font-size: 16px;
  	}
  	.telefonia{
  		color: #43FF00;
  		font-family: Arial;
  		font-size: 16px;
  	}
  	.tv{
  		color: #FF5800;
  		font-family: Arial;
  		font-size: 16px;
  	}

  	.btn-enviar{
  		background: linear-gradient(#021526, #062540);
  		color: white;
  		font-size: 17px;
  		width: 120px;
  		font-family: Arial;
  	}

  	.btn-cancelar{
  		background: linear-gradient(#8C030E, #260104);
  		color: white;
  		font-size: 17px;
  		width: 120px;
  		font-family: Arial;
  	}
  	

  </style>
<body class="fundo">

	<nav class="navbar navbar-expand-lg navbar-dark grad-b">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-danger" href="#">SteadCompany</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Internet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Telefonia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TV</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
	<h2 class="mt-3 mb-3 text-center dif-letra"><em><u>Cadastro de pacotes de serviços de telefonia/comunicação</u></em></h2>
  	<form method="GET" action="dados.php">
  		<!-- Cadastro basico -->
  		<div class="form-group">
		    <label for="idEmpresa">Empresa</label>
		    <input type="text" class="form-control" name="nmEmpresa" id="idEmpresa" placeholder="Empresa">
		</div>
		<div class="form-group">
		    <label for="idEndCompleto">Endereço Completo</label>
		    <input type="text" class="form-control" name="nmEndCompleto" id="idEndCompleto" placeholder="Rua Joaquim Barbosa, 342">
		</div>
		<div class="form-group">
		    <label for="idTelefone">Telefone</label>
		    <input type="text" class="form-control" name="nmTelefone" id="idTelefone" placeholder="(014) 99854-1225">
		</div>
		<div class="form-group">
		    <label for="idEmail">Email</label>
		    <input type="email" class="form-control" name="nmEmail" id="idEmail" placeholder="empresa123@example.com">
		</div>

		<div class="form-group">
		    <label for="idPreco">Preço</label>
		    <input type="text" class="form-control" name="nmPreco" id="idPreco" placeholder="500,00">
		</div>
		  
		  <br />
		  <hr />
		  <br />

		  <!-- Nav dos pacotes -->
		  <ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active internet" id="internet-tab" data-toggle="tab" href="#internet" role="tab" aria-controls="internet" aria-selected="true">Internet</a>
			  </li>
			  <li class="nav-item ">
			    <a class="nav-link telefonia" id="telefonia-tab" data-toggle="tab" href="#telefonia" role="tab" aria-controls="telefonia" aria-selected="false">Telefonia</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link tv" id="tv-tab" data-toggle="tab" href="#tv" role="tab" aria-controls="tv" aria-selected="false">TV</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">

			<!-- Inicio Conteúdo Internet -->	
			  <div class="tab-pane fade show active" id="internet" role="tabpanel" aria-labelledby="internet-tab">

			  	<div class="form-group mt-3">
				    <label for="idDescricao">Descrição</label>
				    <input type="text" class="form-control" name="nmDescricao" id="idDescricao" placeholder="Descrição">
				</div>

				<label>Banda de Internet</label>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmBanda" id="net50" value="50MB" checked>
				  <label class="form-check-label" for="net50">
				    50 MB
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmBanda" id="net100" value="100MB">
				  <label class="form-check-label" for="net100">
				    100 MB
				  </label>
				</div>
				
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmBanda" id="net200" value="200MB">
				  <label class="form-check-label" for="net200">
				    200 MB
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmBanda" id="net300" value="300MB">
				  <label class="form-check-label" for="net300">
				    300 MB
				  </label>
				</div>

				<label class="mt-2">Download</label>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmDownload" id="dl100gb" value="100GB" checked>
				  <label class="form-check-label" for="dl100gb">
				    Limite de 100 GB
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmDownload" id="dl300gb" value="300GB">
				  <label class="form-check-label" for="dl300gb">
				    Limite de 300 GB
				  </label>
				</div>
				
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmDownload" id="dl500gb" value="500GB">
				  <label class="form-check-label" for="dl500gb">
				    Limite de 500 GB
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmDownload" id="dl1tb" value="1TB">
				  <label class="form-check-label" for="dl1tb">
				    Limite de 1 TB
				  </label>
				</div>

					<div class="form-group mt-3">
				    <label for="idQtdeEmail">Quantidade de E-mail</label>
				    <input type="number" class="form-control" name="nmQtdeEmail" id="idQtdeEmail" placeholder="100">
				</div>

			  </div>
			<!-- Fim Conteúdo Internet -->

			<!-- Inicio Conteúdo Telefonia -->		
			  <div class="tab-pane fade" id="telefonia" role="tabpanel" aria-labelledby="telefonia-tab">

			  	<div class="form-group mt-3">
				    <label for="idOperadoraTel">Operadora Telefonia</label>
				    <input type="text" class="form-control" name="nmOperadoraTel" id="idOperadoraTel" placeholder="Vivo">
				</div>

				<label class="mt-2">Secretária</label>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmSecretaria" id="idSecretariaYes" value="Sim" checked>
				  <label class="form-check-label" for="idSecretariaYes">
				    Sim
				  </label>
				</div>

				<div class="form-check">
				  <input class="form-check-input" type="radio" name="nmSecretaria" id="idSecretariaNo" value="Nao">
				  <label class="form-check-label" for="idSecretariaNo">
				    Não
				  </label>
				</div>

				<div class="form-group mt-3">
				    <label for="idCodOperadora">Código Operadora</label>
				    <input type="text" style="width: 80px !important;" class="form-control" name="nmCodOperadoraTel" id="idCodOperadora" placeholder="14">
				</div>
			  </div>
			<!-- Fim Conteúdo Telefonia -->	

			<!-- Inicio Conteúdo TV -->	
			  <div class="tab-pane fade" id="tv" role="tabpanel" aria-labelledby="tv-tab">

			  	<div class="form-group mt-3">
				    <label for="idOperadoraTv">Operadora TV</label>
				    <input type="text" class="form-control" name="nmOperadoraTv" id="idOperadoraTv" placeholder="Vivo">
				</div>

				<div class="form-group mt-3">
				    <label for="idNomePacote">Nome do Pacote</label>
				    <input type="text" class="form-control" name="nmNomePacote" id="idNomePacote" placeholder="Combo Plus">
				</div>

				<h5 class="mb-3 text-center"><u>Canais:</u></h5>
			<div class="row justify-content-center ">
				<div class="card bg-dark col-md-5 " style="width: 18rem;">
					<label for="idLite">
				  <div class="card-body">
				  	<input class="form-check-input" type="radio" name="nmCanais" id="idLite" value="Canais Lite" checked>
				    <h5 class="card-title text-primary">Lite  </h5>
				    <h6 class="card-subtitle mb-2 text-muted">Super HD</h6>
				    <p class="card-text">Pacote econômico com programação para toda a familía se divertir.</p>
				  </div>
				  <ul class="list-group list-group-flush ">
				    <li class="list-group-item bg-primary">42 Canais Pagos</li>
				    <li class="list-group-item bg-primary mb-3">40 Canais em HD</li>
				  </ul>
				  <div class="card-footer ">
				  	<small class="text-muted" >No combo a partir de</small><br>
				    R$ 84,90/mês
				  </div>
				</label>
				</div>

				<div class="card bg-dark col-md-5 ml-5" style="width: 18rem;">
					<label for="idPremium">
				  <div class="card-body">
				  	<input class="form-check-input" type="radio" name="nmCanais" id="idPremium" value="Canais Premium">
				    <h5 class="card-title text-success">Premium</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Ultra HD</h6>
				    <p class="card-text">Maior programação de canais infantins de categoria de alta qualidade.</p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item bg-success">63 Canais Pagos</li>
				    <li class="list-group-item bg-success mb-3">58 Canais em HD</li>
				  </ul>
				  <div class="card-footer ">
				  	<small class="text-muted" >No combo a partir de</small><br>
				    R$ 99,90/mês
				  </div>
				</label>
				</div>
			</div>
			<div class="row justify-content-center mt-3">
			
				<div class="card bg-dark col-md-5" style="width: 18rem;">
					<label for="idMaster">
				  <div class="card-body">
				  	<input class="form-check-input" type="radio" name="nmCanais" id="idMaster" value="Canais Master">
				    <h5 class="card-title text-warning">Master</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Ultimate HD</h6>
				    <p class="card-text">Programação completa com canais de esportes, filmes, séries, infantis, internacionais e variedades.</p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item bg-warning">89 Canais Pagos</li>
				    <li class="list-group-item bg-warning mb-3">75 Canais em HD</li>
				  </ul>
				  <div class="card-footer ">
				  	<small class="text-muted" >No combo a partir de</small><br>
				    R$ 109,90/mês
				  </div>
				</label>
				</div>

				<div class="card bg-dark col-md-5 ml-5" style="width: 18rem;">
				  <label for="idChampion">
				  	<div class="card-body">
				  	<input class="form-check-input" type="radio" name="nmCanais" id="idChampion" value="Canais Champion">
				    <h5 class="card-title text-danger">Champion</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Full HD</h6>
				    <p class="card-text"> Tenha os maiores sucesso de bilheteria e as melhores series na sua casa, com os canais Telecine e HBO.</p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item bg-danger">103 Canais Pagos</li>
				    <li class="list-group-item bg-danger mb-3">89 Canais em HD</li>
				  </ul>
				  <div class="card-footer ">
				  	<small class="text-muted" >No combo a partir de</small><br>
				    R$ 184,90/mês
				  </div>
				  </label>
				</div>
			</div>
			  </div>
			<!-- Fim Conteúdo TV -->	
			</div>
		<div class="mt-4 mb-5 d-flex justify-content-center">
		 <button type="submit" class="btn btn-enviar mr-5">Enviar</button>
		 <button type="reset" class="btn btn-cancelar ">Cancelar</button>
		</div>
	</form>
</div>
 <section class="mt-5"> <!-- Rodapé -->
    <footer class="section footer-classic context-dark bg-image grad-b" >
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p class="mt-3">Contamos com times especializados em cada necessidade, ou seja, entregamos uma plataforma de alta qualidade, com bilhetagem, DETRAF, SBC, BDO, relatórios, uma das plataformas mais completas do mercado. Também disponibilizamos o serviço de gerenciamento de toda a demanda de pós operação, desde envios de relatórios para ABR Telecom e Anatel, aberturas de BA’s, BP’s, etc.</p>
                
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contatos</h5>
              <dl class="contact-list">
                <dt>Endereço</dt>
                <dd>Av. Castro Alves, 62 - Somenzari</dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">brunolongo333@hotmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Fone:</dt>
                <dd><a href="tel:#">+(14) 998661673</a> <span>ou</span> <a href="tel:#">+(14) 3433-5467</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li> <a href="#"><i class="far fa-question-circle pr-2"></i>Ajuda</a></li>
                <li><a href="#"><i class="far fa-id-card pr-2"></i>Projetos</a></li>
                <li><a href="#"><i class="fab fa-facebook pr-2"></i>Facebook</a></li>
                <li><a href="#"><i class="fas fa-book pr-2"></i>Contato</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><i class="fab fa-facebook"></i><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><i class="fab fa-twitter-square"></i><span>Twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><i class="fab fa-google-plus"></i><span>Gmail</span></a></div>
          <!--Direitos-->
               
        </div>
         <p class="rights text-center mt-2"><span>©  </span><span class="copyright-year">2019</span><span> </span><span></span><span>. </span><span>All Rights Reserved.</span></p>
      </footer>

  </section><!-- Fim Rodapé -->
    <?php  




    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>