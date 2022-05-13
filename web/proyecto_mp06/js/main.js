/*  ---------------------------------------------------
    Template Name: Dreams
    Description: Dreams wedding template
    Author: Colorib
    Author URI: https://colorlib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Portfolio filter
        --------------------*/
        $('.portfolio__filter li').on('click', function () {
            $('.portfolio__filter li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.portfolio__gallery').length > 0) {
            var containerEl = document.querySelector('.portfolio__gallery');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Masonary
    $('.work__gallery').masonry({
        itemSelector: '.work__item',
        columnWidth: '.grid-sizer',
        gutter: 10
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Hero Slider
	--------------------*/
    $('.hero__slider').owlCarousel({
        loop: true,
        dots: true,
        mouseDrag: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        margin: 0,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });

    var dot = $('.hero__slider .owl-dot');
    dot.each(function () {
        var index = $(this).index() + 1;
        if (index < 10) {
            $(this).html('0').append(index);
        } else {
            $(this).html(index);
        }
    });

    /*------------------
        Testimonial Slider
    --------------------*/
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        dotsEach: 2,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            }
        }
    });

    /*------------------
        Latest Slider
    --------------------*/
    $(".latest__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        dotsEach: 2,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            }
        }
    });

    /*------------------
        Logo Slider
    --------------------*/
    $(".logo__carousel").owlCarousel({
        loop: true,
        margin: 100,
        items: 6,
        dots: false,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            992: {
                items: 5
            },
            768: {
                items: 4
            },
            480: {
                items: 3
            },
            320: {
                items: 2
            }
        }
    });

    /*------------------
        Video Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*------------------
        Counter
    --------------------*/
    $('.counter_num').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})(jQuery);

const dadesUsuari = () => {
    let notificacio = document.querySelector(".notification");
   
    if (usuari.value != "" && contrasenya.value != "") {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        //document.querySelector("body").innerHTML = this.responseText;
        if (this.responseText == true) {
          window.location.replace("blog.php");
        } else {
          notificacio.style.display = "block";
          notificacio.innerHTML = this.responseText;
        }
      }
      xhttp.open("GET","validarUsuari.php?usuari="+usuari.value+"&contrasenya="+contrasenya.value);
      xhttp.send();
    } else {
      // En cas contrari s'executa un avís
      notificacio.style.display = "block";
      notificacio.style.position = "fixed";
  
      notificacio.innerHTML = "Has d'omplir tots els camps";
    }
    // Cinc segons després l'avís torna al seu estat original
    setTimeout(() => notificacio.style.display = "none", 3000);
}

function teclatLogin(event) {
    if (event.key === "Enter") dadesUsuari();
}

function buscarDades(nickname) {
    let notificacio = document.querySelector(".notification");
    let buscador = document.querySelector("#buscador").value;
    if (buscador != "") {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.querySelector("#resultats").innerHTML = this.responseText;
        }
        xhttp.open("GET","buscarDades.php?buscador="+buscador+"&nickname="+nickname);
        xhttp.send();
    } else {
        // En cas contrari s'executa un avís
        notificacio.style.display = "block";
        notificacio.style.position = "fixed";

        notificacio.innerHTML = "Has d'omplir el buscador";
    }
    // Cinc segons després l'avís torna al seu estat original
    setTimeout(() => notificacio.style.display = "none", 3000);
}

function contingutInici(llista, nickname) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.querySelector("#contingut").innerHTML = this.responseText;
    }
    xhttp.open("GET","contingutInici.php?llista="+llista+"&nickname="+nickname);
    xhttp.send();
}

const validarUsuari = () => {
    let notificacio = document.querySelector(".notification");
    let usuariLogin = document.querySelector("#usuari_login");
    let contrasenyaLogin = document.querySelector("#contrasenya_login");
   
    if (usuariLogin.value != "" && contrasenyaLogin.value != "") {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        if (this.responseText == true) {
          window.location.replace("blog.php");
        } else {
          notificacio.style.display = "block";
          notificacio.innerHTML = this.responseText;
        }
      }
      xhttp.open("GET","validarUsuari.php?usuari="+usuariLogin.value+"&contrasenya="+contrasenyaLogin.value);
      xhttp.send();
    } else {
      // En cas contrari s'executa un avís
      notificacio.style.display = "block";
      notificacio.style.position = "fixed";
  
      notificacio.innerHTML = "Has d'omplir tots els camps";
    }
    // Cinc segons després l'avís torna al seu estat original
    setTimeout(() => notificacio.style.display = "none", 3000);
}

const enregistrarUsuari = () => {
    let notificacio = document.querySelector(".notification");
    let nomUsuariRegistre = document.querySelector("#nom_usuari_registre");
    let usuariRegistre = document.querySelector("#usuari_registre");
    let contrasenyaRegistre = document.querySelector("#contrasenya_registre");
   
    if (nomUsuariRegistre.value != "" && usuariRegistre.value != "" && contrasenyaRegistre.value != "") {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        if (this.responseText == true) {
          window.location.replace("blog.php");
        } else {
          notificacio.style.display = "block";
          notificacio.innerHTML = this.responseText;
        }
      }
      xhttp.open("GET","enregistrarUsuari.php?nom_usuari="+nomUsuariRegistre.value+"&usuari="+usuariRegistre.value+"&contrasenya="+contrasenyaRegistre.value);
      xhttp.send();
    } else {
      // En cas contrari s'executa un avís
      notificacio.style.display = "block";
      notificacio.style.position = "fixed";
  
      notificacio.innerHTML = "Has d'omplir tots els camps";
    }
    // Cinc segons després l'avís torna al seu estat original
    setTimeout(() => notificacio.style.display = "none", 3000);
}

function teclat(event, form) {
    if (event.key == "Enter" && form == "login") validarUsuari();
    if (event.key == "Enter" && form == "registre") enregistrarUsuari();
}

let obert = false;
function fnXat() {
    if (obert) {
        // En cas que estigui oberta, la finestra es tancarà
        finestra_xat.style.transform = "translateY(150%)";
        boto_xat.innerHTML = `<i class="fa fa-whatsapp"></i>`;
        obert = false;
    } else {  
        // De lo contrari s'obrirà
        finestra_xat.style.transform = "translateY(20%)";
        boto_xat.innerHTML = `<i class="fa fa-times"></i>`;
        obert = true;
    }
}

function pujarDocument(inputs) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        let notificacio = document.querySelector(".notification");
        notificacio.style.display = "block";
        notificacio.style.position = "fixed";
        notificacio.innerHTML = this.responseText;
        setTimeout(() => notificacio.style.display = "none", 3000);
    }
    xhttp.open("GET","pujarDocument.php?nom="+inputs["nom"].value+"&descripcio="+inputs["descripcio"].value+"&tipus_document="+inputs["tipus_document"].value+"&ubicacio="+inputs["ubicacio"].value+"&paginas="+inputs["paginas"].value);
    xhttp.send();
}

function pujarExecutable(inputs) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        let notificacio = document.querySelector(".notification");
        notificacio.style.display = "block";
        notificacio.style.position = "fixed";
        notificacio.innerHTML = this.responseText;
        setTimeout(() => notificacio.style.display = "none", 3000);
    }
    xhttp.open("GET","pujarExecutable.php?nom="+inputs["nom"].value+"&descripcio="+inputs["descripcio"].value+"&tipus_exe="+inputs["tipus_exe"].value+"&ubicacio="+inputs["ubicacio"].value+"&num_arxius="+inputs["num_arxius"].value);
    xhttp.send();
}

function pujarVideo(inputs) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        let notificacio = document.querySelector(".notification");
        notificacio.style.display = "block";
        notificacio.style.position = "fixed";
        notificacio.innerHTML = this.responseText;
        setTimeout(() => notificacio.style.display = "none", 3000);
    }
    xhttp.open("GET","pujarVideo.php?nom="+inputs["nom"].value+"&descripcio="+inputs["descripcio"].value+"&ubicacio="+inputs["ubicacio"].value+"&adult="+inputs["adult"].checked);
    xhttp.send();
}

function pujarImatge(inputs) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        let notificacio = document.querySelector(".notification");
        notificacio.style.display = "block";
        notificacio.style.position = "fixed";
        notificacio.innerHTML = this.responseText;
        setTimeout(() => notificacio.style.display = "none", 3000);
    }
    xhttp.open("GET","pujarImatge.php?nom="+inputs["nom"].value+"&descripcio="+inputs["descripcio"].value+"&ubicacio="+inputs["ubicacio"].value+"&adult="+inputs["adult"].checked);
    xhttp.send();
}