<?php

$senha_escolhida="Marcelo@#$%¨&";
$palavra_chave = "@!#!$#%!!¨@¨#&¨#&#&*123";

$cript_senha = sha1($senha_escolhida).sha1($palavra_chave);

echo $cript_senha;

?>