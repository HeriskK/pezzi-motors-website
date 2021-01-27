<?php

$instagram_link = 'https://www.instagram.com/pezzimotors/';
$facebook_link = 'https://www.facebook.com/pezzimotors/';
$whatsapp_link = '';

?>


<!DOCTYPE html>
<html>

<head>

    <title>Pezzi Motors | Revenda de Carros | Esteio</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/headerfooter.css">
    <link rel="stylesheet" href="/css/estoque.css">
    <link rel="stylesheet" href="/css/sobre.css">
    <link rel="stylesheet" href="/css/contato.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> <!-- 300, 400, 600 e 700 -->

    <script src="https://kit.fontawesome.com/2f4889854d.js" crossorigin="anonymous"></script>

    <script src="/js/script.js" type="text/javascript"></script>

    <!-- GOOGLE MAPS -->

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Palavras-chave, do, meu, site">  <!---->
    <meta name="description" content="Descrição do website">

    <meta charset="utf-8">
    <!-- --------- -->

</head>

<body>


    <header> <!---------------------- HEADER -->

        <div class="top-header">

            <div class="w50 left endereco">
                
                <h4>Av. Pres. Vargas, 3650 - São Sebastião, Esteio - RS, Brasil</h4>

            </div>

            <div class="w50 left numero">

                <h4>(51) 3110 0808 - (51) 9 9968 4528</h4>

            </div>

            <div class="clear"></div>

        </div>

        <div class="header">

            <div class="logo left"><img src="/images/logo-mini.jpg" alt=""></div>

            <nav class="desktop right">

                <ul>
                    <li><a href="/index.php">HOME</a></li>
                    <li><a href="/estoque.php">ESTOQUE</a></li>
                    <li><a href="/sobre.php">SOBRE</a></li>
                    <li class="contato"><a href="/contato.php">CONTATO</a></li>
                </ul>
                <ul>
                    <li><a target="_blank" href=" <?php echo $instagram_link ?> "><i class="icon-redes fab fa-instagram-square"></i></a></li>
                    <li><a target="_blank" href=" <?php echo $facebook_link ?> "><i class="icon-redes fab fa-facebook-square"></i></a></li>
                    <li><a target="_blank" href=" <?php echo $whatsapp_link ?> "><i class="icon-redes fab fa-whatsapp-square"></i></a></li>
                </ul>

            </nav>

            <nav class="mobile right">
                
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>

                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ESTOQUE</a></li>
                    <li><a href="">SOBRE</a></li>
                    <li><a href="">CONTATO</a></li>
                </ul>

            </nav>

            <!--
            <div class="icones right">
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-whatsapp-square"></i>
            </div>
            -->

            <div class="clear"></div>

        </div>

    </header>