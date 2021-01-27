<footer> <!---------------------- FOOTER -->

    <div class="top-footer left">

        <div class="w50 left-footer left">

            <div class="google-maps">
                
                <div id="map"></div>

            </div>

        </div>

        <div class="w50 right-footer left">

            <div class="info-footer" style="font-family:<?php echo $fonte;?>;" >


                <!-- Nome da Empresa -->

                <div class="info-1-f">
                    <h3 style="letter-spacing: 1px;">PEZZI MOTORS</h3>
                </div>

                <!-- Informações -->

                <div class="info-2-f">

                    <div class="endereco-f">

                        <div class="icon-f left"><i class="fas fa-map-marker-alt"></i></div>
                        <h4 class="text-f left"><?php echo $info_endereco;?></h4>

                    </div>

                    <div class="telefone-f">

                        <div class="icon-f left"><i class="fas fa-phone"></i></div>
                        <h4 class="text-f left"><?php echo $info_telefone_1;?></h4>

                    </div>

                    <div class="telefone-f">

                        <div class="icon-f left"><i class="fas fa-phone"></i></div>
                        <h4 class="text-f left"><?php echo $info_telefone_2;?></h4>

                    </div>

                    <div class="email-f">

                        <div class="icon-f  left"><i class="far fa-envelope-open"></i></div>
                        <h4 class="text-f left"><?php echo $info_email;?></h4>

                    </div>

                    <div style="clear: both;"></div> <!-- Limpa as flutuações -->

                </div>

                <!-- Ícones Redes Socias-->

                <div class="info-3-f">

                    <a href=""><i class="icon-redes fab fa-instagram-square"></i></a>
                    <a href=""><i class="icon-redes fab fa-facebook-square"></i></a>
                    <a href=""><i class="icon-redes fab fa-whatsapp-square"></i></a>

                </div>


            </div>

        </div>

        <div class="clear"></div>

    </div>

    <div class="bottom-footer left">

        <p>© 2018 by Pezzi Motors | Todos os direitos reservados</p>

    </div>

    <div class="clear"></div>

</footer>

<!-- ------- SCRIPTS ------- -->

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKUBo6Q5Us5fxGLsD6B1WhqKI24xQaOUo&callback=initMap&libraries=&v=weekly"
    defer
></script>

<script>
    function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -29.858200, lng: -51.179821 },
        zoom: 8,
    });
    }
</script>

</body>
</html>