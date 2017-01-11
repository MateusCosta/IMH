<?php
/**
 * Created by PhpStorm.
 * User: Mateus
 * Date: 09/12/2016
 * Time: 02:41
 */

$pdo = new PDO("mysql:host=localhost;dbname=db_creche", "root", "");
if(!$pdo){
    die('Erro ao criar a conexão');
}


$executa = $pdo->query("INSERT INTO tb_pessoa(p_id) VALUES (DEFAULT )");


if($executa){
    return true;
}
else{
    print_r($pdo->errorInfo());
}

?>