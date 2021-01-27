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

// Astra

$veiculo_9_nome = 'Chevrolet Astra HB';
$veiculo_9_image = '/images/anuncio-teste_9.webp';
$veiculo_9_motor = '2.0';
$veiculo_9_ano = '2011';
$veiculo_9_km = ' -- ';
$veiculo_9_valor = '26.900,00';

// Prisma

$veiculo_10_nome = 'GM Prisma LTZ';
$veiculo_10_image = '/images/anuncio-teste_10.webp';
$veiculo_10_motor = '1.4';
$veiculo_10_ano = '2014';
$veiculo_10_km = '64.000km';
$veiculo_10_valor = '43.900,00';

include('header.php');
?>

    <!-- ____________________________________ ESTOQUE DE VEÍCULOS -->


    <div class="center separador-estoque-home">

        <div class="s-estoque"><h3>ESTOQUE DE VEÍCULOS</h3></div>

    </div>

    <div class="center">

        <section class="filtros"> <!-- -------- FILTROS -- -->

            <!-- -- Marca -- -->

            <div class="w20 left filtro-marca">

                <select class="slc-filtro" name="marca" id="marca">
                    <option value="BMW">BMW</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Citroën">Citroën</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Honda">Honda</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="JEEP">JEEP</option>
                    <option value="KIA">KIA</option>
                    <option value="Land Hover">Land Hover</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Renault">Renault</option>
                    <option value="Toyota">Toyota</option>
                </select>

            </div>

            <!-- -- Modelo -- -->

            <div class="w20 left filtro-modelo">

                <select class="slc-filtro" name="modelo" id="modelo">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>

            </div>

            <!-- -- Cambio -- -->

            <div class="w20 left filtro-cambio">

                <select class="slc-filtro" name="cambio" id="cambio">
                    <option value="BMW">Manual</option>
                    <option value="Chevrolet">Automático</option>
                </select>

            </div>

            <!-- -- Valor -- -->

            <div class="w20 left filtro-valor">

                <select class="slc-filtro" name="valor" id="valor">
                    <option value="indiferente">Indiferente</option>
                    <option value="10k">R$ 10.000,00</option>
                    <option value="20k">R$ 20.000,00</option>
                    <option value="30k">R$ 30.000,00</option>
                    <option value="40k">R$ 40.000,00</option>
                    <option value="50k">R$ 50.000,00</option>
                    <option value="60k">R$ 60.000,00</option>
                    <option value="70k">R$ 70.000,00</option>
                    <option value="80k">R$ 80.000,00</option>
                    <option value="90k">R$ 90.000,00</option>
                    <option value="100k">R$ 100.000,00</option>
                </select>

            </div>

            <div class="w20 left filtro-procurar">

                <input class="slc-filtro" type="submit" name="procurar-filtro" value="Procurar"/>

            </div>

        </section>
    </div>

    <section class="center estoque-veiculos">

<!-- ---------- CARDS ---------- -->

    <div class="left estoque-single">

        <div class="top-single left">
            <img class="img-anuncio" src="<?php echo $veiculo_1_image ?>" alt="">

            <div class="motor"> <?php echo $veiculo_1_ano ?> </div>
        </div>

        <div class="bottom-single left">

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

    <div class="left estoque-single">

        <div class="top-single left">
            <img class="img-anuncio" src="<?php echo $veiculo_9_image ?>" alt="">
            
            <div class="motor"> <?php echo $veiculo_9_ano ?> </div>
        </div>

        <div class="bottom-single left">

            <h2> <?php echo $veiculo_9_nome ?> </h2>
            <p><b>Motor: </b> <?php echo $veiculo_9_motor ?> </p>
            <p><b>KM: </b> <?php echo $veiculo_9_km ?> </p>
            <h3>R$ <?php echo $veiculo_9_valor ?> </h3>

        </div>

    </div>

    <div class="left estoque-single">

        <div class="top-single left">
            <img class="img-anuncio" src="<?php echo $veiculo_10_image ?>" alt="">
            
            <div class="motor"> <?php echo $veiculo_10_ano ?> </div>
        </div>

        <div class="bottom-single left">

            <h2> <?php echo $veiculo_10_nome ?> </h2>
            <p><b>Motor: </b> <?php echo $veiculo_10_motor ?> </p>
            <p><b>KM: </b> <?php echo $veiculo_10_km ?> </p>
            <h3>R$ <?php echo $veiculo_10_valor ?> </h3>

        </div>

    </div>

    <div class="clear"></div>

    </section>

<?php
include('footer.php');
?>