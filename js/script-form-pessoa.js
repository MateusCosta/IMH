/**
 * Created by Mateus on 20/12/2016.
 */
$(document).ready(function () {

//Inicialização das variáveis
var beneficio = 0;
var restricao = 0;
var deficiencia = 0;

//Inicializa a sidebar
$('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
});

//Inicializa as Checkboxes e radioboxes
$('.ui.radio.checkbox').checkbox();
    $('.ui .checkbox').checkbox();


//$('.ui.page').dimmer('show');

$('.possui-beneficio_td').html('<i class="red remove icon"></i>');
$( ".possui-beneficio" ).click(function() {
    if(beneficio==0){
        $(".beneficio").attr("disabled",false);
        $(".beneficio").focus();
        $(".beneficio").attr("value","");
        $('.possui-beneficio_td').html('<i class="green checkmark icon"></i>');
        beneficio = 1;

    }else{
        $(".beneficio").attr("disabled",true);
        $(".beneficio").attr("value","Não possui");
        $('.possui-beneficio_td').html('<i class="red remove icon"></i>');
        beneficio = 0;

    }

});

$('.possui-restricao-medica_td').html('<i class="red remove icon"></i>');
$( ".tem-restricao" ).click(function() {
    if(restricao==0){
        $(".restricao").attr("disabled",false);
        $(".restricao").focus();
        $(".restricao").attr("value","");
        $('.possui-restricao-medica_td').html('<i class="green checkmark icon"></i>');
        restricao = 1;
    }else{
        $(".restricao").attr("disabled",true);
        $(".restricao").attr("value","Não possui");
        $('.possui-restricao-medica_td').html('<i class="red remove icon"></i>');
        restricao = 0;
    }

});

$('.possui-deficiencia-fisica_td').html('<i class="red remove icon"></i>');
$( ".tem-deficiencia" ).click(function() {
    if(deficiencia==0){
        $(".deficiencia").attr("disabled",false);
        $(".deficiencia").focus();
        $(".deficiencia").attr("value","");
        $('.possui-deficiencia-fisica_td').html('<i class="green checkmark icon"></i>');
        deficiencia = 1;
    }else{
        $(".deficiencia").attr("disabled",true);
        $(".deficiencia").attr("value","Não possui");
        $('.possui-deficiencia-fisica_td').html('<i class="red remove icon"></i>');
        deficiencia = 0;
    }

});


$(function() {
    $("#file").change(function() {
        $("#message").empty(); // To remove the previous error message
        console.log("Imagem enviada");
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
            $('.previewing').attr('src','image.png');
            $('.status_foto_p').addClass('hidden');
            $('.status_foto_n').removeClass('hidden');
            $('.previewing').attr('src','img/image.png');

            return false;
        }
        else
        {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            $('.status_foto_n').addClass('hidden');
            $('.status_foto_p').removeClass('hidden');


        }
    });
});

function imageIsLoaded(e) {
    $("#file").css("color","green");
    $('#image_preview').css("display", "block");
    $('.previewing').attr('src', e.target.result);
    $('#imagem_pos').attr('src', e.target.result);
    $('.previewing').attr('width', '250px');
    $('.previewing').attr('height', '230px');
};


$('.message .close')
    .on('click', function() {
        $(this)
            .closest('.message')
            .transition('fade')
        ;
    })
;

    $('#btn_enviar').click(function() {

        preencherTabela();






        $('.ui.modal').modal('show');
    });

function preencherTabela(){

    pegarMatricula();




    $('input[name^="pessoa[nome-completo]"]').each(function() {
        $('.nome-completo').text($(this).val());
    });

    $('input[name^="pessoa[nome-social]"]').each(function() {
        $('.nome-social').text($(this).val());
    });

    $('input[name^="pessoa[genero]"][type="radio"]:checked').each(function() {
        $('.genero').text($(this).val());
    });

    $('input[name^="pessoa[estado-civil]"][type="radio"]:checked').each(function() {
        $('.estado-civil').text($(this).val());
    });

    $('input[name^="pessoa[data-nascimento]"]').each(function() {
        $('.data-nascimento').text($(this).val());
    });
    $('input[name^="pessoa[naturalidade]"]').each(function() {
        $('.naturalidade').text($(this).val());
    });
    $('input[name^="pessoa[cidade]"]').each(function() {

        $('.cidade').text($(this).val());
    });
    $('input[name^="pessoa[estado]"]').each(function() {

        $('.estado').text($(this).val());
    });
    $('input[name^="pessoa[rua]"]').each(function() {
        $('.rua').text($(this).val());
    });
    $('input[name^="pessoa[numero]"]').each(function() {
        $('.numero').text($(this).val());
    });
    $('select[name^="pessoa[bairro]"] option:selected').each(function() {

        $('.bairro').text($(this).text());
    });

    $('input[name^="pessoa[complemento]"]').each(function() {
        $('.complemento').text($(this).val());
    });
    $('input[name^="pessoa[cep]"]').each(function() {
        $('.cep').text($(this).val());
    });
    $('input[name^="pessoa[referencia]"]').each(function() {
        $('.referencia').text($(this).val());
    });
    $('input[name^="pessoa[telefone]"]').each(function() {
        $('.telefone').text($(this).val());
    });
    $('input[name^="pessoa[numero-certidao]"]').each(function() {
        $('.numero-certidao').text($(this).val());
    });
    $('input[name^="pessoa[rg]"]').each(function() {
        $('.rg').text($(this).val());
    });
    $('input[name^="pessoa[cpf]"]').each(function() {
        $('.cpf').text($(this).val());
    });
    $('input[name^="pessoa[nis]"]').each(function() {
        $('.nis').text($(this).val());
    });
    $('input[name^="pessoa[titulo]"]').each(function() {
        $('.titulo').text($(this).val());
    });
    $('input[name^="pessoa[nome-mae]"]').each(function() {
        $('.nome-mae').text($(this).val());
    });
    $('input[name^="pessoa[nome-pai]"]').each(function() {
        $('.nome-pai').text($(this).val());
    });
    $('select[name^="pessoa[escolaridade]"] option:selected').each(function() {

        $('.escolaridade').text($(this).text());
    });
    $('input[name^="pessoa[email]"]').each(function() {
        $('.email').text($(this).val());
    });
    $('input[name^="pessoa[numero-filhos]"]').each(function() {
        $('.numero-filhos').text($(this).val());
    });
    $('input[name^="pessoa[possui-beneficio]"][type="checkbox"]:checked').each(function() {



    });
    $('input[name^="pessoa[beneficio]"]').each(function() {
        $('.beneficio_td').text($(this).val());
    });
    $('input[name^="pessoa[possui-restricao-medica]"][type="checkbox"]:checked').each(function() {




    });
    $('input[name^="pessoa[restricao-medica]"]').each(function() {
        $('.restricao-medica_td').text($(this).val());
    });

    $('input[name^="pessoa[possui-deficiencia-fisica]"][type="checkbox"]:checked').each(function() {






    });
    $('input[name^="pessoa[deficiencia-fisica]"]').each(function() {
        $('.deficiencia-fisica_td').text($(this).val());
    });
};




    function preencherForm(){
        $('input[name^="pessoa[nome-completo]"]').each(function() {
            $(this).attr("value","Verônica");
        });

        $('input[name^="pessoa[nome-social]"]').each(function() {
            $(this).attr("value","Vera");
        });

        $('input[name^="pessoa[naturalidade]"]').attr("value","Fortaleza");

        $('input[name^="pessoa[genero]"][type="radio"][value="Feminino"]').prop("checked",true);

        $('input[name^="pessoa[estado-civil]"][type="radio"][value="Divorciado"]').prop("checked",true);

        $('input[name^="pessoa[data-nascimento]"]').prop("value","11-01-1966");

        $('input[name^="pessoa[cep]"]').attr("value","60526-550");

        $('input[name^="pessoa[rua]"]').attr("value","Tomás Cavalcante");

        $('input[name^="pessoa[numero]"]').attr("value","152");

        $('input[name^="pessoa[bairro]"]').attr("value","Autran Nunes");

        $('input[name^="pessoa[complemento]"]').attr("value","lado ímpar ");

        $('input[name^="pessoa[referencia]"]').attr("value","Referência");

        $('input[name^="pessoa[cidade]"]').attr("value","Fortaleza");

        $('input[name^="pessoa[estado]"]').attr("value","Estado");

        $('input[name^="pessoa[telefone]"]').attr("value","(85) 99279-7209");

        $('input[name^="pessoa[cpf]"]').attr("value","053.976.733-66");

        $('input[name^="pessoa[rg]"]').attr("value","2007009081257");

        $('input[name^="pessoa[nis]"]').attr("value","123456789");

        $('input[name^="pessoa[titulo]"]').attr("value","1234567891011");

        $('input[name^="pessoa[nome-mae]"]').attr("value","(85) 99279-7209");

        $('input[name^="pessoa[nome-pai]"]').attr("value","053.976.733-66");

        $('select[name^="pessoa[escolaridade]"] option[value="1"]').prop("selected",true);

        $('input[name^="pessoa[email]"]').attr("value","veronicacnsf@gmail.com");

        $('input[name^="pessoa[numero-filhos]"]').attr("value","3");

        $('.possui-beneficio').trigger("click");

        $('input[name^="pessoa[beneficio]"]').attr("value","Bolsa Família");

        $('.tem-restricao').trigger("click");

        $('input[name^="pessoa[restricao-medica]"]').attr("value","Restrição");

        $('.tem-deficiencia').trigger("click");

        $('input[name^="pessoa[deficiencia-fisica]"]').attr("value","Deficiência");





    };

    $('.preencher_form').on('click',function () {
        preencherForm();
    })

    $('input[name="pessoa[data-nascimento]"]').on('click',function () {
        $(this).mask("99/99/9999",{placeholder:"dd/mm/aaaa"});

    });

    $('input[name="pessoa[telefone]"]').on('click',function () {
        $(this).mask("(99) 99999-9999");

    });

    $('input[name="pessoa[cep]"]').on('click',function () {
        $(this).mask("99999-999");

    });

    $('input[name="pessoa[cpf]"]').on('click',function () {
        $(this).mask("999.999.999-99");

    });


    $('.pesquisa-cep').on('click',function (e) {
        var valor = $('input[name="pessoa[cep]"]').val();
        cep(valor);

        e.preventDefault();
        return false;
    });



    function pegarMatricula() {
        var matricula
        $.ajax({
            type: "GET",
            url: "funcao.php?funcao=matricula",
            success: function(data)
            {
               matricula = data;


            }
        });
        matricula = parseInt(matricula);
        $('.matricula').append(matricula);

    }





    function cep(cep) {
        $.ajax({
            type: "GET",
            url: "http://viacep.com.br/ws/"+cep+"/json/",
            //url: "http://localhost/crud-pdo/web.php",
            beforeSend: function () {
                console.log("Carregando");

            },
            success: function () {
                console.log("Carregado");

            }

        })

            .done(function (data) {
                var localidade = data['localidade'];
                var uf = data['uf'];
                console.log(localidade);

                $('select[name="pessoa[estado]"] option[value='+uf+']').prop('selected', 'selected').change();
                $('select[name="pessoa[cidade]"] option[value="'+localidade+'"]').prop('selected', 'selected').change();

                $('input[name="pessoa[rua]"]').attr("value",data['logradouro']);
                $('input[name="pessoa[bairro]"]').attr("value",data['bairro']);
                $('input[name="pessoa[cidade]"]').attr("value",data['localidade']);
                $('input[name="pessoa[estado]"]').attr("value",data['uf']);
                $('input[name="pessoa[complemento]"]').attr("value",data['complemento']);
                console.log(data);

            });
    }


    $('.confirmar-envio').on('click',function () {
        $('.form-pessoa').submit();
    });





});