 <?php

 $pdo = new PDO("mysql:host=localhost;dbname=db_creche", "root", "");
    if(!$pdo){
        die('Erro ao criar a conexão');
    }

if(isset($_POST) && isset($_POST['funcao'])){

        if($_POST['funcao'] == "matricula")

}






 ?>








