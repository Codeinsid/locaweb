<?php 
 session_start();
include('conexao.php');

 ?>


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
      <form action="login.php" method="post">
        <div class="imgcontainer">
          <img src="./logo.png" alt="logo locaweb" class="avatar" />
        </div>


                      

                       

                        <?php

                        if(isset($_SESSION['nao_autenticado'])): ?>
                            <p><small><small> Usuário ou Senha Inválidos! </small></small><p>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>


                        
    
    </div>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" name="senha" class="form-control" placeholder="Senha">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>

