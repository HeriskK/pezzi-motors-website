<?php

$title_name = 'Pezzi Motors | Revenda de Carros | Esteio';

$info_endereco = 'Av. Pres. Vargas, 3650 - São Sebastião, Esteio - RS, Brasil';
$info_telefone_1 = '(51) 3110 0808';
$info_telefone_2 = '(51) 9 9968 4528';
$info_email = 'pezzimotors@gmail.com';

$fonte = 'Open Sans, sans-serif;';


// Estoque de Veículos:

// Criar nome e nome completo

// Voyage 1.0   - 1 

$veiculo_1_nome = 'VW Voyage Trend';
$veiculo_1_image = '/images/anuncio-teste_2.webp';
$veiculo_1_motor = '1.0';
$veiculo_1_ano = '2015';
$veiculo_1_km = '73.000km';
$veiculo_1_valor = '33.900,00';

// BMW X1       - 2

$veiculo_2_nome = 'BMX X1 SDRIVE';
$veiculo_2_image = '/images/anuncio-teste.webp';
$veiculo_2_motor = '2.0';
$veiculo_2_ano = '2011';
$veiculo_2_km = '120.000km';
$veiculo_2_valor = '55.900,00';

// Livina       - 3

$veiculo_3_nome = 'Nissan Livina SL';
$veiculo_3_image = '/images/anuncio-teste_3.webp';
$veiculo_3_motor = '1.6';
$veiculo_3_ano = '2012';
$veiculo_3_km = '112.000km';
$veiculo_3_valor = '27.900,00';

// C3           - 4

$veiculo_4_nome = 'Citroen C3 Tendence';
$veiculo_4_image = '/images/anuncio-teste_4.webp';
$veiculo_4_motor = '1.5';
$veiculo_4_ano = '2014';
$veiculo_4_km = '98.000km';
$veiculo_4_valor = '33.900,00';

//  Voyage 1.6  - 5

$veiculo_5_nome = 'VW Voyage Trend';
$veiculo_5_image = '/images/anuncio-teste_5.webp';
$veiculo_5_motor = '1.6';
$veiculo_5_ano = '2013';
$veiculo_5_km = '82.000km';
$veiculo_5_valor = '33.900,00';

// KA           - 6

$veiculo_6_nome = 'Ford KA Hacth';
$veiculo_6_image = '/images/anuncio-teste_6.webp';
$veiculo_6_motor = '1.0';
$veiculo_6_ano = '2020';
$veiculo_6_km = '26.000km';
$veiculo_6_valor = '45.900,00';

// Tucson

$veiculo_7_nome = 'Hyundai Tucson';
$veiculo_7_image = '/images/anuncio-teste_7.webp';
$veiculo_7_motor = '2.0';
$veiculo_7_ano = '2012';
$veiculo_7_km = '120.000km';
$veiculo_7_valor = '34.900,00';

// Jetta

$veiculo_8_nome = 'VW Jetta Variant';
$veiculo_8_image = '/images/anuncio-teste_8.webp';
$veiculo_8_motor = '2.5';
$veiculo_8_ano = '2010';
$veiculo_8_km = '140.000km';
$veiculo_8_valor = '39.900,00';

include('header.php');
?>

    <!---------------------- INÍCIO DO SITE ------------------------>

    <!-------------------- Banner Principal -->

    <section class="banner-principal">

    <div class="overlay"></div>

    <div class="center">

        <form action="">
            <h2 class="bp-title">Qual o seu número?</h2>
            <input type="tel" id="phone" name="phone" placeholder="(00) 0 0000 0000" required>
            <div class="check">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Prefiro contato pelo Whatsapp</label>
            </div>
            <input type="submit" name="acao" value="Solicitar contato"/>
        </form>

    </div>

    </section>


    <!-- ____________________________________ ESTOQUE DE VEÍCULOS -->


    <div class="center separador-estoque-home">

        <div class="s-estoque"><h3>ESTOQUE DE VEÍCULOS</h3></div>

    </div>

    <section class="center estoque-veiculos">


        <!-- ---------- CARDS ---------- -->

        <div class="left estoque-single">

            <div class="click-card"><a href="/carros/carro-1.php"></a></div>

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_1_image ?>" alt="">

                <div class="motor"> <?php echo $veiculo_1_ano ?> </div>
            </div>

            <div class="bottom-single left" onclick="">

                <h2> <?php echo $veiculo_1_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_1_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_1_km ?> </p>
                <h3>R$ <?php echo $veiculo_1_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_2_image ?>" alt="">

                <div class="motor"> <?php echo $veiculo_2_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_2_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_2_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_2_km ?> </p>
                <h3>R$ <?php echo $veiculo_2_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_3_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_3_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_3_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_3_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_3_km ?> </p>
                <h3>R$ <?php echo $veiculo_3_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_4_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_4_ano ?> </div>
            </div>

            <div class="bottom-single left">

            <h2> <?php echo $veiculo_4_nome ?> </h2>
            <p><b>Motor: </b> <?php echo $veiculo_4_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_4_km ?> </p>
                <h3>R$ <?php echo $veiculo_4_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_5_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_5_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_5_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_5_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_5_km ?> </p>
                <h3>R$ <?php echo $veiculo_5_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_6_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_6_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_6_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_6_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_6_km ?> </p>
                <h3>R$ <?php echo $veiculo_6_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_7_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_7_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_7_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_7_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_7_km ?> </p>
                <h3>R$ <?php echo $veiculo_7_valor ?> </h3>

            </div>

        </div>

        <div class="left estoque-single">

            <div class="top-single left">
                <img class="img-anuncio" src="<?php echo $veiculo_8_image ?>" alt="">
                
                <div class="motor"> <?php echo $veiculo_8_ano ?> </div>
            </div>

            <div class="bottom-single left">

                <h2> <?php echo $veiculo_8_nome ?> </h2>
                <p><b>Motor: </b> <?php echo $veiculo_8_motor ?> </p>
                <p><b>KM: </b> <?php echo $veiculo_8_km ?> </p>
                <h3>R$ <?php echo $veiculo_8_valor ?> </h3>

            </div>

        </div>

        <div class="clear"></div>

        <!-- Botão para ver todo o Estoque -->

        <div class="center ver-mais">
            <input onclick="window.location='/estoque.php';" type="submit" name="ver-mais" value="Ver todo estoque"/>
        </div>

    </section>

<?php
include('footer.php');
?>