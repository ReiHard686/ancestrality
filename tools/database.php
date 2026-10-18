<?php
   $mysqli = new mysqli("sql111.infinityfree.com", "if0_42009252", "0Xm1kttO9wu0C", "if0_42009252_ancestrality");

   if ($mysqli->connect_errno) {
      die("Erro ao ligar à base de dados: " . $mysqli->connect_error);
   }
   $mysqli->set_charset("utf8mb4");
?>
