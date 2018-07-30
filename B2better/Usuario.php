<?php
class Usuario{
    
private $Nome;
private $Sobrenome;
private $Email;
private $Senha;
private $Confirmar_Senha;


function getNome()
{
    return $this->nome;
}

function setNome($n)
{
    $this->nome = $n;
}

    function getSobrenome()
{
    return $this->sobrenome;
}

function setSobrenome ($sb)
{
    $this->sobrenome = $sb;
}

function getEmail()
{
    return $this->email;
}

function setEmail($e)
{
    $this->email = $e;
}

function getSenha()
{
    return $this->Senha;
}

function setSenha($s)
{
    $this->senha = $s;
}

function getConfirmar_Senha()
{
    return $this->confirmarsenha;
}

function setConfirmar_Senha($cs)
{
    $this->confirmarsenha = $cs;
}

function Usuario ($n,$sb,$e,$s,$cs)
{
    $this->nome = $n;
    $this->sobrenome = $sb;
    $this->email = $e;
    $this->senha = $s;
    $this->confirmarsenha = $cs;

}


function Imprimir()
{
  return $this->nome." ".$this->sobrenome." ".$this->email." ".$this->senha." ".$this->confirmarsenha." ";
}
}
}
?>