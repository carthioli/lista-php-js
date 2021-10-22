<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">

  <title>Cadastros</title>
  <script type="text/javascript" src="javascript/script1.js"></script>
  
</head>
<body>

<header>
  <div class="center">
    <h1>CADASTRO</h1>
  </div>
  <div class="pesquisar">
    <form method="POST" action="index.php">
      <input class="inppesquisar" name="pesquisar" type="text">
      <input class="btnpesquisar" type="image" src="img/pesquisa.png" width="15px">
    </form>
  </div>
</header>
<main>
  <div class="card">

    <form method="POST" action="cadastro.php">
  
      
      <div class="lineinput">
        <label>NOME:</label>
        <input type="text" id="nome" name="nome">
      </div>
      <div class="lineinput">
        <label>SOBRENOME:</label>
        <input type="text" id="sobrenome" name="sobrenome">
      </div>
      <div class="lineinput">
        <label>APELIDO:</label>
        <input type="text" name="apelido">
      </div>
      <div class="lineinput">
        <label>TELEFONE:</label>
        <input type="number" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX">
      </div>
      <div class="lineinput">
        <label>CIDADE:</label>
        <input type="text" id="cidade" name="cidade" >
      </div>
      <div class="lineinput">
        <label>ESTADO:</label>
        <input type="text" id="estado" name="estado" >
      </div>
      <div class="botaoform">
      <input class="button" onclick="salvar()" type="submit" name="salva" value="SALVAR">
        <input class="button" onclick="cancelar()" type="submit" name="cancela" value="CANCELAR">
        <input class="button" type="submit" name="limpar" value="LIMPAR CADASTROS">  
        <a class="button" href="index.php">VOLTAR</a>    
      </div>
    </form> 
  </div>  
  <?php

  ?>

  <div class="tabela">
  <table border="1">
    <thead>
      <th class="center">ID</th>
      <th>NOME</th>
      <th>SOBRENOME</th>
      <th>APELIDO</th>
      <th>TELEFONE</th>
      <th>CIDADE</th>
      <th>ESTADO</th>
      <th class="center">AÇÕES</th>
    </thead>
    <tbody id="tbody">
  <?php
  if( isset( $_SESSION['cadastro'] ) ){
    $lista = $_SESSION['cadastro'];

  }
    // verifica se a lista NAO esta VAZIA
    

    if( array_key_exists( 'cadastro', $_SESSION ) ){
      foreach ( $lista as $id => $pessoa ){
        
        ?>
        <tr>
          <td><?php echo $id+1;?></td>
          <td><?php echo $pessoa['nome'];?></td>
          <td><?php echo $pessoa['sobrenome'];?></td>
          <td><?php echo $pessoa['apelido'];?></td>
          <td><?php echo $pessoa['telefone'] ;?></td>
          <td><?php echo $pessoa['cidade'];?></td>
          <td><?php echo $pessoa['estado'];?></td>
          <td>
            <form method="POST" action="index.php">
              <input type="hidden" name="id" value="<?php echo $id;?>"/>
              <input class="botao1" name="editar" type="image" src="img/editar.png" width="20px">
            </form>  
            <form method="POST" action="cadastro.php">
              <input type="hidden" name="id_excluir" value="<?php echo $id;?>"/>
              <input class="botao1" name="excluir" onclick="salvar()" type="image" src="img/excluir.png" width="20px">
            </form>
          </td>
        </tr>  
    <?php
      }
    }
    else{
    ?>
      <tr>
        <td colspan="7">Nenhum cadastro... ;( </td>
      </tr>        
    <?php
        }
      
    ?>
    </tbody>
  </table>
  </div>