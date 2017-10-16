<?php
//aqui temos um array para ser serializado
$array = array('you' => 'tu', 'he' => 'ele', 'she' => 'ela');

//criação de uma variável teste para mostrar o que a função serialize faz
$s = serialize($array);
//imprime o resultado da serialização
//echo $s;

//criação de outra variável agora para unserializar
$o = unserialize($s);
//imprime o resultado da unserialização

?>