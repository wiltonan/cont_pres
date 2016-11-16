// // este es el menu
$(document).ready(function(){

  $("#registrar").click(function(){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("registro_deudor.php");
  });

  $("#abonar").click(function(){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("abonar.php");
  });

  $("#prestar").click(function(){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("prestamos.php");
  });
  url();
});


function url(){
  var URLhas = window.location.hash;

  if(URLhas=="#/Registrar_deudor"){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("registro_deudor.php");
  }

  if(URLhas=="#/Abonar"){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("abonar.php");
  }
  //
  if(URLhas=="#/Prestar"){
    $("#inicio").fadeOut();
    $(".opciones").fadeIn();
    $(".opciones").load("prestamos.php");
  }
}

function inicio1(){
  $(".opciones").fadeOut();
  $("#inicio").fadeIn();
}


// este es para destruir session
// function destroy(){
//   location.href="../Controller/login.controller.php?action=session"
// }
