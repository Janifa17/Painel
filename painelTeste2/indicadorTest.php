<?php
header("Refresh:600");
//echo date('H:i:s Y-m-d');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <title>Indicador</title>
    <!--Bootstrap-css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="s>    <!--Bootstrap-css-->
    <!--Bootstrap-js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzp>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3m>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJ>    <!--Bootstrap-js-->
    <link rel="stylesheet" href="css/indicador.css">
    <script src="js/data1.js" defer></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header>

        <div id="ww_2b3b5757e59cf" v='1.3' loc='id' a='{"t":"ticker","lang":"pt","ids":["wl4918"],"font":"Times","sl_ic>        <script async src="https://app1.weatherwidget.org/js/?id=ww_2b3b5757e59cf"></script>

        <div class="wraap">
            <img id="figura" src="imagens/CIPA-Bag.png">
            <p1>ESTAMOS HÁ:</p1>
            <span id="Data"></span>
            <p2>DIAS SEM ACIDENTES</p2>
            <p3>NOSSO RECORDE ANTERIOR FOI DE:</p3>
            <span id="Dias"></span>
			    <div class="clock">

                <script type="text/javascript">
                    var css_file = document.createElement("link");
                    css_file.setAttribute("rel", "stylesheet");
                    css_file.setAttribute("type", "text/css");
                    css_file.setAttribute("href", "https://s.bookcdn.com//css/cl/bw-cl-100x100.css?v=0.0.1");
                    document.getElementsByTagName("head")[0].appendChild(css_file);
                </script>
                <div id="tw_4_944277707">
                    <div style="width:100px; height:100px; margin: 0 auto;"><a href="https://ibooked.com.br/time/canoas>                </div>
                <script type="text/javascript">
                    function setWidgetData_944277707(data) {
                        if (typeof(data) != 'undefined' && data.results.length > 0) {
                            for (var i = 0; i < data.results.length; ++i) {
                                var objMainBlock = '';
                                var params = data.results[i];
                                objMainBlock = document.getElementById('tw_' + params.widget_type + '_' + params.widget>                                if (objMainBlock !== null) objMainBlock.innerHTML = params.html_code;
                            }
                        }
                    }
                    var clock_timer_944277707 = -1;
                    widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=585;type=4;id=944277707;scode=124;cit>                    var widgetUrl = location.href;
                    widgetSrc += '&ref=' + widgetUrl;
                    var wstrackId = "";
                    if (wstrackId) {
                        widgetSrc += ';wstrackId=' + wstrackId + ';'
                    }
                    var timeBookedScript = document.createElement("script");
                    timeBookedScript.setAttribute("type", "text/javascript");
                    timeBookedScript.src = widgetSrc;
                    document.body.appendChild(timeBookedScript);
					   </script>

            </div>
        </div>
    </header>
    <section class="slide">
        <div id="carouselSlides" class="carousel slide" data-ride="carousel" data-interval="10000">

            <ol class="carousel-indicators">
                <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSlides" data-slide-to="1"></li>
                <li data-target="#carouselSlides" data-slide-to="2"></li>
                <li data-target="#carouselSlides" data-slide-to="3"></li>
                <!--    <li data-target="#carouselSlides" data-slide-to="4"></li> -->
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagens/aviso1.jpg" width="250" height="500" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/aviso2.jpg" width="250" height="500" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/aviso3.jpg" width="250" height="500" alt="Terceiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagens/aviso4.jpg" width="250" height="500" alt="Quarto Slide">
                </div>

                <!--            <div class="carousel-item">
                   <img class="d-block w-100" src="imagens/aviso5.jpg" width="250" height="500" alt="Quinto Slide">
                </div>
-->

            </div>
        </div>
    </section>
	 <footer>


        <!--<div id="ww_2b3b5757e59cf" v='1.3' loc='id' a='{"t":"ticker","lang":"pt","ids":["wl4918"],"font":"Times","s>        <script async src="https://app1.weatherwidget.org/js/?id=ww_2b3b5757e59cf"></script>-->
        <p> @copyright &copy - by Informática BAGERGS
        <p>
    </footer>

</body>

</html>