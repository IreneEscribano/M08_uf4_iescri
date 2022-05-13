const addBtn = document.querySelector(".add-menu");
addBtn.addEventListener("click", e => {
    addBtn.classList.toggle("closed");
});
let obert = false;
let popup = document.querySelector("#finestraNotificacions");
let icona = document.querySelector("#btnNotificacions");
popup.className = "popup_inici";
icona.innerHTML = `<i class="icon-footer fa-solid fa-bell"></i>`;

const fnPopupNotificacions = () => {
  if (obert) {
    /**
     * Quan cliquem el botó del popup amb el popup activat, es desactivarà i la icona canviarà
     * a la icona de l'usuari
     */
    popup.className = "popup_desactivat";
    icona.innerHTML = `<i class="icon-footer fa-solid fa-bell"></i>`;
    obert = false;
  } else {
    /**
     * Si cliquem el botó del popup i el popup està desactivat, s'activarà canviant la 
     * icona d'usuari pel d'una creu
     */
    popup.className = "popup_activat";
    icona.innerHTML = `<i class="icon_popup fa fa-times my-float has-text-white"></i>`;
    obert = true;
  }
}

let obert2 = false;
let icona2 = document.querySelector("#btnBurger");
let popup2 = document.querySelector("#finestraBurger");

popup2.className = "popup_inici";
icona2.innerHTML = `<i class="icon-footer fa-solid fa-bars"></i>`;

const fnPopupBurger = () => {
  if (obert2) {
    /**
     * Quan cliquem el botó del popup amb el popup activat, es desactivarà i la icona canviarà
     * a la icona de l'usuari
     */
    popup2.className = "popup_desactivat";
    icona2.innerHTML = `<i class="icon-footer fa-solid fa-bars"></i>`;
    obert2 = false;
  } else {
    /**
     * Si cliquem el botó del popup i el popup està desactivat, s'activarà canviant la 
     * icona d'usuari pel d'una creu
     */
    popup2.className = "popup_activat";
    icona2.innerHTML = `<i class="icon_popup fa fa-times my-float has-text-white"></i>`;
    obert2 = true;
  }
}
window.onload = ul(0);
function ul(index) {
	let underlines = document.querySelectorAll(".underline");

	for (let i = 0; i < underlines.length; i++) {
		underlines[i].style.transform = 'translate3d(' + index * 100 + '%,0,0)';
	}

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.querySelector(".portfolio__gallery").innerHTML = this.responseText;
  }
  xhttp.open("GET","mostrarFitxers.php?index="+index /*+usuari*/);
  xhttp.send();
}


const obrirImatge = (img) => {
  img.classList.toggle("active");
}

popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()
