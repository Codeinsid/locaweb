<?php 

session_start();
include('verificar_login.php');

 ?>





<h2> Usuário : <?php echo  $_SESSION['usuario']; ?> </h2>
<a href="logout.php">Sair</a>





 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="form.css" />
    <title>Admin</title>
  </head>
  <body>
    <section class="form-container">
      <form action="action_page.php" method="post">
        <div class="imgcontainer">
          <img src="./logo.png" alt="logo locaweb" class="avatar" />
        </div>

        <div class="container">
          <label for="uname"><b>Produto</b></label>


          <select name="cars" id="cars" placeholder="Escolha o Status">
          <option value="hosp">Hospedagem</option>
               <option value="email">E-mail</option>
               <option value="vps">VPS</option>
          </select>    
               
          <label for="uname"><b>Status</b></label>

          <select name="cars" id="cars" placeholder="Escolha o Status">
               
               <option value="funcional">Funcional</option>
               <option value="atencao">Atenção</option>
               <option value="foradoAr">Fora do Ar</option>

             </select>

          <button type="submit">Salvar</button>
        </div>
      </form>
    </section>
  </body>
</html>






