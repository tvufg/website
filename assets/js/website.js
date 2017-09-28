/*! =========================================================
 * Website.js by Matheus Pimenta - http://github.com/matheuspiment
 *
 * Copyright 2017 TV UFG - http://tvufg.otg.br
 * Available from http://github.com/tvufg/website
 *
 * ========================================================= */

$(document).ready(function(){
  $('.slider').slider();

  // Em desenvolvimento
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

  if (mes >= 9) {
    mes = "" + (mes + 1);
  } else {
    mes = "0" + (mes + 1);
  }

  // Montagem da string de consulta da data
  var queryData = ano4 + mes + dia;
  console.log(queryData);

  getGrade(queryData);

  // Função que busca no banco a grade de programação
  function getGrade(queryData) {
    $.ajax({
      url: 'get_grade.php',
      type: "POST",
      data: { getDia: queryData },
      success: function(grade) {
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
            hora = data.getHours();
            min = data.getMinutes();

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

            if (programaTarget != "") {
              $("#2 .col-md-12 h3").html(programaTarget.titulo);
              $("#2 .col-md-12 h4").html(programaTarget.hora);
              $("#next").html(programaTarget.titulo);
            }

            nextPG++;
            programa = gradeJSON[nextPG];
            programaTarget =  JSON.parse(programa);

            if (programaTarget != "") {
              $("#3 .col-md-12 h3").html(programaTarget.titulo);
              $("#3 .col-md-12 h4").html(programaTarget.hora);
            }
          }
        } else {
        }
      }
    });
  }
});
