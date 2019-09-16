<?php 
require_once 'ServicosClass.php';
require_once 'InternetClass.php';
require_once 'TelefoniaClass.php';
require_once 'TvClass.php';

//Dados Padrao
$empresa = $_GET['nmEmpresa'];
$enderecoCompleto = $_GET['nmEndCompleto'];
$telefone = $_GET['nmTelefone'];
$email = $_GET['nmEmail'];
$preco = $_GET['nmPreco'];

//Dados Internet
$descricao = $_GET['nmDescricao'];
$banda = $_GET['nmBanda'];
$download = $_GET['nmDownload'];
$quantidadeEmail = $_GET['nmQtdeEmail'];

//Dados Telefonia
$operadoraTel = $_GET['nmOperadoraTel'];
$secretaria = $_GET['nmSecretaria'];
$codigoOperadoraTel = $_GET['nmCodOperadoraTel'];

//Dados TV
$operadoraTv = $_GET['nmOperadoraTv'];
$nomePacote = $_GET['nmNomePacote'];
$canais = $_GET['nmCanais'];

//Criando Classe
$pacote = new Pacote();

//Atribuindo valores nas Classes - Setters
//Empresa
$pacote->setEmpresa($empresa);
$pacote->setEnderecoCompleto($enderecoCompleto);
$pacote->setTelefone($telefone);
$pacote->setEmail($email);
$pacote->setPreco($preco);
//Internet
$pacote->setDescricao($descricao);
$pacote->setBanda($banda);
$pacote->setDownload($download);
$pacote->setQuantidadeEmail($quantidadeEmail);
//Telefonia
$pacote->setOperadoraTel($operadoraTel);
$pacote->setSecretaria($secretaria);
$pacote->setCodigoOperadoraTel($codigoOperadoraTel);
//TV
$pacote->setOperadoraTv($operadoraTv);
$pacote->setNomePacote($nomePacote);
$pacote->setCanais($canais);

//echo "<pre>";
//print_r($pacote);
//echo "<pre>";

/*
//Verificar Dados
echo $empresa."<br>". $enderecoCompleto."<br>". $telefone."<br>". $email."<br>". $preco."<br>";

echo "<hr>";

echo $descricao."<br>". $banda."<br>". $download."<br>". $quantidadeEmail."<br>";

echo "<hr>";

echo $operadoraTel."<br>". $secretaria."<br>". $codigoOperadoraTel."<br>";

echo "<hr>";

echo $operadoraTv."<br>". $secretaria."<br>". $canais."<br>";
*/
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
  	.grad-b{
  		background: linear-gradient(#000000, #000014);
  	}
  	.table-top{
  		margin-top: 4% !important;
  		background: black;
  		opacity: .8;
  		font-family: Arial;
  	}
  	.dif-letra{
  		font-family: 'Rubik Mono One', sans-serif;
  		color: #F2B705;
  	}
  	 .internet{
  		background: #00FFD5;
  		font-family: Arial;
  		font-size: 16px;
  	}
  	.telefonia{
  		background: #43FF00;
  		font-family: Arial;
  		font-size: 16px;
  	}
  	.tv{
  		background: #FF5800;
  		font-family: Arial;
  		font-size: 16px;
  	}
  	.cor{
  		color:black;
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
	<h1 class="dif-letra text-center mt-5"><u><em>Dados do Pacote Registrado</em></u></h1>
	<table class="table table-top">
  <thead class="thead-dark ">
    <tr>
      <th scope="row" colspan="4" class="h4 text-center text-info">Informações dos dados cadastrados</th>
    </tr>
  </thead>
  <tbody class="text-light">
    <tr>
      <th scope="row">Empresa</th>
      <td><?php echo $pacote->getEmpresa(); ?></td>
    <tr>
      <th scope="row">Endereço Completo</th>
      <td><?php echo $pacote->getEnderecoCompleto(); ?></td>
    </tr>
    <tr>
      <th scope="row">Telefone</th>
      <td><?php echo $pacote->getTelefone(); ?></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?php echo $pacote->getEmail(); ?></td>
    </tr>
    <tr>
      <th scope="row">Preço</th>
      <td><?php echo $pacote->getPreco(); ?></td>
    </tr>
    <tr class="bg-info">
      <th scope="row" colspan="4" class="text-center cor">Internet</th>
    </tr>
    <tr>
      <th scope="row">Descrição</th>
      <td><?php echo $pacote->getDescricao(); ?></td>
    </tr>
    <tr>
      <th scope="row">Banda</th>
      <td><?php echo $pacote->getBanda(); ?></td>
    </tr>
    <tr>
      <th scope="row">Download</th>
      <td><?php echo $pacote->getDownload(); ?></td>
    </tr>
    <tr>
      <th scope="row">Quantidade de E-mail</th>
      <td><?php echo $pacote->getQuantidadeEmail(); ?></td>
    </tr>
    <tr class="bg-warning">
      <th scope="row" colspan="4" class="text-center cor">Telefonia</th>
    </tr>
    <tr>
      <th scope="row">Operadora Telefonia</th>
      <td><?php echo $pacote->getOperadoraTel(); ?></td>
    </tr>
    <tr>
      <th scope="row">Secretaria</th>
      <td><?php echo $pacote->getSecretaria(); ?></td>
    </tr>
    <tr>
      <th scope="row">Código Operadora</th>
      <td><?php echo $pacote->getCodigoOperadoraTel(); ?></td>
    </tr>
    <tr class="bg-danger">
      <th scope="row" colspan="4" class="text-center cor">TV</th>
    </tr>
    <tr>
      <th scope="row">Operadora TV</th>
      <td><?php echo $pacote->getOperadoraTv(); ?></td>
    </tr>
    <tr>
      <th scope="row">Nome Pacote</th>
      <td><?php echo $pacote->getNomePacote(); ?></td>
    </tr>
    <tr>
      <th scope="row">Canais</th>
      <td><?php echo $pacote->getCanais(); ?></td>
    </tr>
  </tbody>
</table>
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