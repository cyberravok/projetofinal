<?php
$conexao = new mysqli('localhost:3306','root','','locadora');
if($conexao->connect_errno){
   echo "tem algo errado";
   }
   else {
    echo "tudo certo";
   }