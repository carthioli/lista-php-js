<?php

  session_start();
  
  $cadastro = array(
      'nome' => $_POST['nome'],
      'sobrenome' => $_POST['sobrenome'],
      'apelido' => $_POST['apelido'],
      'telefone' => $_POST['telefone'],
      'cidade' => $_POST['cidade'],
      'estado' => $_POST['estado']
  );
  
  $_SESSION['cadastro'][] = $cadastro;

  if ( array_key_exists( 'limpar', $_POST ) ) {
    session_destroy();
  } 
    

  //redireciona para principal
  header("location:index.php");
  ?>

  
  
<pre><?php
  print_r( $cadastro );
