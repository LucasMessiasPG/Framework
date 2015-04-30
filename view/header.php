<!DOCTYPE html>
<html>
<head>
    <title>Vendedores</title>
    <script src="<?php echo PUBLICO ?>js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo PUBLICO ?>css/bootstrap.css" />
</head>
<body>
<div class="container">
    <?php
    $mensagem = $this->userdata('mensagem');
    if(!empty($mensagem)):
    ?>
    <div class="alert alert-success">
        <strong><?php echo $mensagem ?></strong>
    </div>
    <?php endif; ?>
    <?php
    $error = $this->userdata('error');
    if(!empty($error)):
    ?>
    <div class="alert alert-warning">
        <strong><?php echo $error ?></strong>
    </div>
    <?php endif; ?>
