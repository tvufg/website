<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TV UFG</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/slider-materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- CSS para testes -->
    <style type="text/css">
      .slider.fullscreen {
        height: 673px !important;
      }

      .slider .slides li img {
        background-position: center center !important;
      }

      .bglayer {
        width: 100%;
        height: 100%;
        background: #000;
        top: 0px;
        position: absolute;
        left: 0px;
        z-index: 1;
        opacity: 0.4;
      }

      .slider .slides li .caption {
        top: 40%;
        z-index: 1;
      }

      .navbar {
        z-index: 3;
        background-color: transparent !important;
        padding-top: 25px;
      }

      .search button {
        border-radius: 30px;
        height: 2.375rem;
        width: 2.375rem;
        padding: 0;
        font-size: 0.9375rem;
      }

      .search input {
        border-radius: 30px;
      }

      .nav-link {
        padding-right: 16px !important;
        padding-left: 16px !important;
        font-weight: 500 !important;
      }

      .show-menu {
        height: 100vh;
        background-color: #212121 !important;
      }

      ul.indicators {
        padding-left: 0px;
      }

      .slider.fullscreen ul.indicators {
        bottom: 120px !important;
      }

      .col-md-4:before {
        content: " ";
        width: 12px;
        height: 12px;
        background-color: #FF0000;
        position: absolute;
        left: -20px;
        top: 33px;
        border-radius: 50%;
        animation: ex4 0.7s infinite;
        -moz-animation: ex4 0.7s infinite;
        -webkit-animation: ex4 0.7s infinite;
        box-shadow: 0px 0px 8px 0px red;
      }

      section:after {
        content: " ";
        top: 0;
        right: 0px;
        width: 1px;
        height: 74px;
        position: absolute;
        background: #FFF;
        opacity: 0.2;
      }

      @media (min-width: 1200px) {
        .container {
          max-width: 1240px !important;
        }
      }

      @media (max-width: 1199px) {
         span .col-md-6 {
          padding-left: 15px !important;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logomark-white.png" width="102" height="63" alt="TV UFG">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-light my-2 my-sm-0" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="https://images.unsplash.com/photo-1464817739973-0128fe77aaa1?dpr=1&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop="> <!-- random image -->
          <div class="bglayer"></div>
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="https://ununsplash.imgix.net/photo-1414849424631-8b18529a81ca?q=75&fm=jpg&s=0e993004a2f3704e8f2ad5469315ccb7"> <!-- random image -->
          <div class="bglayer"></div>
          <div class="caption center-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="https://ununsplash.imgix.net/uploads/1413259835094dcdeb9d3/6e609595?q=75&fm=jpg&s=6a4fc66161293fc4a43a6ca6f073d1c5"> <!-- random image -->
          <div class="bglayer"></div>
          <div class="caption center-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>

    <div class="container-fluid" style="height: 75px; background-color: rgba(0,0,0,0.6); position: relative; margin-top: 492px; z-index: 4; color: white;">
      <div class="container" style="height: inherit;">
        <div class="row" style="height: inherit;">
          <section id="1" class="col-md-4">
            <h3 class="" style="margin: 12px 0px; display: inline-block; text-transform: uppercase; font-size:45px; font-weight: 600;">No Ar</h3>
            <span class="col-md-6"style="display: inline-block; padding-left: 25px;">
              <h3 style="font-size: 15px; line-height: 18px; margin: 0px; font-weight: 300; overflow: hidden; max-height: 36px;"></h3>
              <h4 style="font-size: 17px; opacity: 0.5; font-weight: 100; margin-top: 6px; margin-bottom: 0px;"></h4>
            </span>
          </section>
          <section id="2" class="col-md-3">
            <span class="col-md-12"style="display: inline-block; top: 20%;">
              <h3 style="font-size: 15px; line-height: 18px; margin: 0px; font-weight: 300; overflow: hidden; max-height: 36px;"></h3>
              <h4 style="font-size: 17px; opacity: 0.5; font-weight: 100; margin-top: 6px; margin-bottom: 0px;"></h4>
            </span>
          </section>
          <section id="3" class="col-md-3">
            <span class="col-md-12"style="display: inline-block; top: 20%;">
              <h3 style="font-size: 15px; line-height: 18px; margin: 0px; font-weight: 300; overflow: hidden; max-height: 36px;"></h3>
              <h4 style="font-size: 17px; opacity: 0.5; font-weight: 100; margin-top: 6px; margin-bottom: 0px;"></h4>
            </span>
          </section>
          <div class="col-md-2">
            <span class="col-md-12"style="display: inline-block; top: 16%; padding: 0px;">
              <a href="http://tvufg.org.br/grade/programacao" style="font-size: 14px; color: white;">
                <i class="fa fa-calendar" style="margin-right: 3px;"></i>
                Programacao Completa
              </a>
              <a href="#" style="font-size: 14px; color: white;">
                <i class="fa fa-signal" style="margin-right: 3px;"></i>
                Como sintonizar a TV
              </a>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="height: 500px; background-color: #EEEEEE;">
      <div class="container" style="height: inherit;">
        <div class="row" style="height: inherit;">
          <div class="col-md-6 my-auto">
            <p id="descricao"></p>
            <h4>No Ar:</h4>
            <h3 id="titulo" style="font-size: 28px; font-weight: 500;"></h3>
            <h4>A seguir:</h4>
            <h6 id="next"></h6>
            <a class="btn btn-outline-primary" style="margin-top: 15px;" href="http://tvufg.org/grade/programacao">Confira a programação completa</a>
          </div>
          <div class="col-md-6 my-auto">
            <div class="col-md-12" style="height: 320px; background-color:#BDBDBD; border-radius: 6px;">
              <i class="fa fa-play" style="font-size: 90px; margin-top: 19%; margin-left:45%;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- JS para testes -->
    <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider();

      $('.navbar-toggler').click(function() {
        $('nav').addClass("show-menu");
        $('.collapse').addClass("show");
      });

      // Obtém a data/hora atual
      var data = new Date();

      // Exemplo de instrução para "pegar" a próxima data
      // data.setDate(data.getDate() + 1);

      // Guarda cada pedaço em uma variável
      var dia     = data.getDate();           // 1-31
      var dia_sem = data.getDay();            // 0-6 (zero=domingo)
      var mes     = data.getMonth();          // 0-11 (zero=janeiro)
      var ano2    = data.getYear();           // 2 dígitos
      var ano4    = data.getFullYear();       // 4 dígitos
      var hora    = data.getHours();          // 0-23
      var min     = data.getMinutes();        // 0-59
      var seg     = data.getSeconds();        // 0-59
      var mseg    = data.getMilliseconds();   // 0-999
      var tz      = data.getTimezoneOffset(); // em minutos

      if (dia < 10) {
        dia = "0" + dia;
      }


      if (mes < 10) {
        mes = "0" + (mes + 1);
      }

      // Montagem da string de consulta da data
      var queryData = ano4 + mes + dia;

      getGrade(queryData);


      // Função que busca no banco a grade de programação
      function getGrade(queryData) {

        $.ajax({
          url: 'get_grade.php',
          type: "POST",
          data: { getDia: queryData },
          success: function(grade) {
            // var gradeJSON = JSON.parse(grade);
            // target = gradeJSON[0];
            // programaTarget = JSON.parse(target);
            // alert(programaTarget.hora);

              if (grade != "") {

                var gradeJSON = JSON.parse(grade);
                var programa;

                // Função que compara duas horas, informadas no formato string
                function compararHora(hora1, hora2) {
                  hora1 = hora1.split(":");
                  hora2 = hora2.split(":");

                  var d = new Date();
                  var data1 = new Date(d.getFullYear(), d.getMonth(), d.getDate(), hora1[0], hora1[1]);
                  var data2 = new Date(d.getFullYear(), d.getMonth(), d.getDate(), hora2[0], hora2[1]);

                  return data1 > data2;
                };

                // Função que identifica e personaliza a exibição do programa que
                // está no ar
                function noAR() {

                  hora    = data.getHours();
                  min     = data.getMinutes();

                  var stringHoraPC = hora + ":" + min;
                  var stringHoraPG;

                  target = gradeJSON[0];
                  programaTarget = JSON.parse(target);

                  if (compararHora(programaTarget.hora, stringHoraPC) == true) {
                    return gradeJSON.length - 1;
                  }

                  for (i = 1; i < gradeJSON.length; i++) {
                    target = gradeJSON[i];
                    programaTarget = JSON.parse(target);
                    stringHoraPG = programaTarget.hora;

                    if (compararHora(stringHoraPG, stringHoraPC) == true) {
                      return i - 1;
                    }
                  }

                  if (i == gradeJSON.length) {
                    return i - 1;
                  }
                }

                // Chamada da função noAR onde o dia e a hora do PC do usuário são
                // identificados e utilizados para difinir a exibição do programa
                // que está no ar
                // if(stringDataAtual == queryData) {
                  var retorno = noAR();

                  if (retorno >= 0) {
                    var noARPG = gradeJSON[retorno];
                    programaTarget = JSON.parse(noARPG);

                    $("#1 .col-md-6 h3").html(programaTarget.titulo);
                    $("#1 .col-md-6 h4").html(programaTarget.hora);
                    $("#descricao").html(programaTarget.descricao);
                    $("#titulo").html(programaTarget.titulo);


                    var nextPG =  retorno + 1;

                    var programa =  gradeJSON[nextPG];
                    programaTarget =  JSON.parse(programa);

                    $("#2 .col-md-12 h3").html(programaTarget.titulo);
                    $("#2 .col-md-12 h4").html(programaTarget.hora);
                    $("#next").html(programaTarget.titulo);

                    nextPG++;
                    programa = gradeJSON[nextPG];
                    programaTarget =  JSON.parse(programa);

                    $("#3 .col-md-12 h3").html(programaTarget.titulo);
                    $("#3 .col-md-12 h4").html(programaTarget.hora);

                  }
                // }

              } else {
                // $('.panel-group').html('<div style="margin-top: 20%;"> <h2 style="text-align: center; font-family: opensans-light,Arial,sans-serif !important; font-weight: 700;">Não há itens para exibição</h2> </div>');
              }
          }
        });
      }


    });
    </script>

  </body>
</html>
