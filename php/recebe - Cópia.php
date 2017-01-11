<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema Instituto Maria da Hora </title>
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="components/icon.css">
    <style type="text/css">

        .margin-topo{
            margin-top: 6px;

        }


    </style>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js"></script>
    <style type="text/css">
        .pusher{

            padding-top: 80px;
        }
        .logo_titulo{
            margin-left: 10px;
        }

    </style>
</head>
<body>
<div class="ui page dimmer">
    <div class="content">
        <div class="center">
            <div class="ui inverted icon header">
                <i class="thumbs up icon"></i>
                Dados Inseridos com Sucesso<br/><br/><br/>
                <button class="huge ui button  green margin-topo">Sucesso</button>
            </div>
        </div>
    </div>
</div>

<div class="ui sidebar left vertical inverted menu" id="sidebar">
    <div class="item">
        <a class="ui logo icon image" href="/">
            <img class="ui mini image" src="img/logo.png">
        </a>
        <a href="/" class="logo_titulo"><b>Sistema Maria da Hora</b></a>
    </div>

    <a href="#" class="item"><b>Visualiar Todos</b></a>

    <div class="item">
        <div class="header">Cadastro</div>
        <div class="menu">

            <a class="item" href="#">
                Pessoa
            </a>

            <a class="item" href="#">
                Funcionário
            </a>

            <a class="item" href="#">
                Aluno
            </a>

            <a class="item" href="#">
                Cargo
            </a>

        </div>
    </div>



</div>
<div class="ui basic icon top fixed menu">
    <a id="toggle" class="item">
        <i class="sidebar icon"></i>
        Menu
    </a>

</div>
</div>

<div class="pusher">

    <div class="ui  container ">
        <div class="ui grid ">
            <h1 class="ui header">Dados Formulário Pessoa</h1>

            <div class="sixteen column row">


                <div class="sixteen wide centered column"><?php include("table-pessoa.php");?></div>


            </div>
            <?php

            $pdo = new PDO("mysql:host=localhost;dbname=db_creche", "root", "");
            if(!$pdo){
                die('Erro ao criar a conexão');
            }


            $url = "http://localhost/crud-pdo/insere.php";

            /* $curl = curl_init();
            curl_setopt($curl,CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HEADER,0);
            curl_setopt($curl, CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$pessoa);

            curl_exec($curl);
            curl_close($curl);

            */

            $context = stream_context_create(array(
                'http' => array(
                    'method'  => 'POST',
                    'content' => $pessoa,
                )
            ));

            $result = file_get_contents('http://localhost/crud-pdo/insere.php', null, $context);

            if ($result === FALSE) {
                echo "Não enviado";


                ?>




            <?php
            }else{
                echo $result;


                ?>

                <script type="text/javascript">



                    //$('.ui.page.dimmer').dimmer('show');


                    $('.ui.page.dimmer').dimmer({
                       // onHide: function () {
                          //  alert("a");
                      //  },
                    }).dimmer('show')




                </script>



            <?php

            }






            ?>

            <div class="sixteen column row">

                <div class="centered column"></div>


                <div class="three wide centered column">
                    <div class="big ui buttons">
                        <button class="big ui button">Editar</button>
                        <div class="or" data-text="ou"></div>
                        <button class="ui positive button">Salvar</button>
                    </div></div>
                <div class="centered column"></div>


            </div>

            <div class="sixteen column row">

                <div class="centered column"></div>

                <div class="centered column"></div>


            </div>








        </div>



    </div>
</div>

</div>

<script type="text/javascript">

    var beneficio = 0;
    var restricao = 0;
    var deficiencia = 0;

    $('#toggle').click(function(){

        $('.ui.sidebar').sidebar('toggle');





    });

    $('.ui.radio.checkbox').checkbox();

    //$('.sucesso').dimmer('show');

    $('.ui.checkbox')
        .checkbox()
    ;


    $( ".tem-beneficio" ).click(function() {
        if(beneficio==0){
            $(".beneficio").attr("disabled",false);
            $(".beneficio").focus();
            $(".beneficio").attr("placeholder","");
            beneficio = 1;
        }else{
            $(".beneficio").attr("disabled",true);
            $(".beneficio").attr("placeholder","Não possui");
            beneficio = 0;
        }

    });

    $( ".tem-restricao" ).click(function() {
        if(restricao==0){
            $(".restricao").attr("disabled",false);
            $(".restricao").focus();
            $(".restricao").attr("placeholder","");
            restricao = 1;
        }else{
            $(".restricao").attr("disabled",true);
            $(".restricao").attr("placeholder","Não possui");
            restricao = 0;
        }

    });

    $( ".tem-deficiencia" ).click(function() {
        if(deficiencia==0){
            $(".deficiencia").attr("disabled",false);
            $(".deficiencia").focus();
            $(".deficiencia").attr("placeholder","");
            deficiencia = 1;
        }else{
            $(".deficiencia").attr("disabled",true);
            $(".deficiencia").attr("placeholder","Não possui");
            deficiencia = 0;
        }

    });



</script>

</body>



</html>



