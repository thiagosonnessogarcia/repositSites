<?php 
$c = $_POST['cargo'];
$nf = $_POST['nomefunc'];
$ne = $_POST['nomeemp'];
$e = $_POST['email'];
$l = $_POST['login'];
$s = md5($_POST['senha']);

$host = "localhost";
$db   = "db_pi";
$user = "root";
$pass = "";

$con = mysql_connect("localhost", "root","") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("db_pi", $con);
$query_select = "SELECT login FROM tb_cadastro WHERE login = '$l'";
$select = mysql_query($query_select,$con);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

  if($l == "" || $l == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $l){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }
      
     else{      $query = "INSERT INTO TB_CADASTRO (CARGO,EMAIL,LOGIN,NOMEEMP,NOMEFUNC,SENHA) VALUES ('$c','$e','$l','$ne','$nf','$s')";
                $insert = mysql_query($query,$con);
        }
       if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
?>  
