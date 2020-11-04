<?php
    //Conexão PDO no banco;
    $conn = New mysqli("127.0.0.1","root","","db_fullstack");

    if($conn->connect_errno){
        print'Erro ao acessar o banco'.$conn->connect_error;
    }
?>