<?php

$title_name = 'Pezzi Motors | Revenda de Carros | Esteio';

$info_endereco = 'Av. Pres. Vargas, 3650 - São Sebastião, Esteio - RS, Brasil';
$info_telefone_1 = '(51) 3110 0808';
$info_telefone_2 = '(51) 9 9968 4528';
$info_email = 'pezzimotors@gmail.com';

$fonte = 'Open Sans, sans-serif;';

include('header.php');
?>

    <div class="center separador-estoque-home">

        <div class="s-estoque"><h3>ENTRE EM CONTATO</h3></div>

    </div>

    <section>

        <div class="center formulario">

            <div class="left form">

                <?php
            
                if(isset($_POST['acao'])){
                    $nome = @$_POST['nome'];
                    $email = @$_POST['email'];
                }
            
                ?>

                <form action="">

                    <input class="w50 ww left" type="text" name="nome" placeholder="Nome">
                    <input class="w50 ww left" type="text" name="telefone" placeholder="Telefone">
                    <input class="w50 ww left" type="text" name="email" placeholder="E-mail">
                    <input class="w50 ww left" type="text" name="cidade" placeholder="Cidade">
                    <input style="height: 48px;" class="w100 mm left" type="text" name="assunto" placeholder="Assunto">
                    <input class="w100 mm left" type="text" name="mensagem" placeholder="Mensagem">
                    <input type="submit" name="acao" value="Enviar">

                </form>

            </div>

            <div class="left contato-redes"> 

                <div class="contato-telefone w100 left">

                    <i class="icon-contato fas fa-phone"></i><h3> CONTATO VIA TELEFONE</h3>

                </div>

                <div class="contato-whatsapp w100 left">

                    <i class="icon-contato fab fa-whatsapp"></i><h3> FALAR PELO WHATSAPP</h3>

                </div>

            </div>

            <div class="clear"></div>

        </div>

    </section>

    

<?php
include('footer.php');
?>