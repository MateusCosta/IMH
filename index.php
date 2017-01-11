            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>Sistema Instituto Maria da Hora </title>
                <link rel="stylesheet" type="text/css" href="css/semantic.css">
                <link rel="stylesheet" type="text/css" href="css/components/icon.css">
                <link rel="stylesheet" type="text/css" href="css/step.css">
                <style type="text/css">

                    .margin-topo{
                        margin-top: 6px;

                    }
                    .campo{
                     font-weight: bold;


                    }




                </style>

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
                                <i class="warning icon"></i>
                                Você está experimentando uma versão de testes
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("php/includes/menu.php"); ?>


            <div class="pusher">

                <div class="ui container">
                    <div class="ui grid">
                        <h1 class="ui header">Formulário de Cadastro de Pessoas </h1><i class="wizard icon preencher_form"></i>







                    <?php include("php/includes/form-pessoa.php"); ?>


                    </div>







                </div>

            </div>



            </div>

            </div>
                <div class="ui modal">
                    <i class="close icon"></i>
                    <div class="header">
                        Confime os dados no formulário antes de enviar
                    </div>
                    <div class="content">
                        <?php include("php/includes/table-pessoa.php");?>
                    </div>

                    <div class="actions">
                        <div class="ui black deny button">
                            Editar
                        </div>
                        <div class="ui positive right labeled icon button confirmar-envio">
                            Salvar
                            <i class="checkmark icon"></i>
                        </div>
                    </div>

                </div>
                <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                <script type="text/javascript" src="js/semantic.min.js"></script>
                <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
                <script type="text/javascript" src="js/script-form-pessoa.js"></script>



            </body>



            </html>