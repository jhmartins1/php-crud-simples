<?php
  include_once("config/url.php");
  include_once("config/process.php");

  // Limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de contatos</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div>
        <div class="navbar-nav">
          <a href="<?= $BASE_URL ?>index.php" class="nav-link active" id="home-link">Agenda</a>
          <a href="<?= $BASE_URL ?>create.php" class="nav-link active" >Adicionar Contato</a>
        </div>
      </div>
    </nav>
  </header>