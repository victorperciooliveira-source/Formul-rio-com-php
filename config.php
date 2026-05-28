<?php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'formulario-gustavo';

   // Cria a conexão usando a classe mysqli corretamente
   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if ($conexao->connect_error) {
       die('Erro de conexão: ' . $conexao->connect_error);
   }

   // Opcional: definir conjunto de caracteres
   $conexao->set_charset('utf8');
?>
