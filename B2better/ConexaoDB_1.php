<?php
function Conectar()
{
    //abrindo conexao com servidor de banco
    mysql_connect("localhost", "root","") or die . " ERRO >>> ". mysql_error();
    //abrir conexao com o banco
    mysql_select_db("db_pi") or die . " ERRO >>> ". mysql_error();
}

function Inserir($sql)
{
    if(mysql_query($sql))
        echo "SUCESSO";
    else
        echo "ERRO" . mysql_error();
}


?>