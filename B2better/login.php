<?php 
  $login = $_POST['login'];
  $entrar = isset($_POST['entrar']);
  $senha = md5($_POST['senha']);
  $connect = mysql_connect("localhost", "root", "");
  $db = mysql_select_db('db_pi');
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM tb_cadastro WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>