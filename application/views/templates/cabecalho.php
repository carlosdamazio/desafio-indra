<!--Este é o cabeçalho das páginas estáticas, com finalidade de ganhar tempo para codificar as páginas-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Desafio Indra - Blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/user.css">
	</head>
<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Desafio Indra</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Inicial</a></li>
             <li><a href="<?php echo base_url(); ?>postagens">Postagens</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>postagens/create">Postar algo</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">