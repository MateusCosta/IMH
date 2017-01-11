<?php
/**
 * Created by PhpStorm.
 * User: Mateus
 * Date: 24/12/2016
 * Time: 01:42
 */

$pdo = new PDO("mysql:host=localhost;dbname=db_creche", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!$pdo){
    die('Erro ao criar a conexão');
}else{


}

$consulta = $pdo->prepare("SELECT COUNT(p_id) FROM tb_pessoa");
$consulta->execute();

$linha = $consulta->fetch(PDO::FETCH_ASSOC);


$matricula = 0;

foreach($linha as $key => $valor)
{
$matricula = $valor;
}

echo $matricula;




?>