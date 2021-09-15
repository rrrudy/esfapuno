$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
  
  
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });
  
  
    return false;

    
  });

  /**buscador */

  document.getElementById("icon-search").addEventListener("click", mostrar_buscador); 
  document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

  bars_search=       document.getElementById("ctn-bars-search");
  cover_ctn_search=  document.getElementById("cover-ctn-search");
  inputSearch=       document.getElementById("inputSearch");
  box_search=        document.getElementById("box-search");

  function mostrar_buscador(){
    bars_search.style.top="80px";
    cover_ctn_search.style.display="block";
    inputSearch.focus();

    if(inputSearch.value===""){
      box_search.style.display = "none";
    }
  }
  function ocultar_buscador(){
    bars_search.style.top="-10px";
    cover_ctn_search.style.display="none";
    inputSearch.value="";
    box_search.style.display ="none";

  }
 document.getElementById("inputSearch").addEventListener("keyup",buscador_interno); 

  function buscador_interno(){
    
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");


    for(i = 0; 1 < li.length; i++){
 
      a =  li[i].getElementsByTagName                       ("a")[0];
      textValue = a.textContent || a.innerText;

      if(textValue.toUpperCase().indexOf(filter) > -1){

        li[i].style.display ="";
        box_search.style.display="block";

        if(inputSearch.value===""){
          box_search.style.display = "none";
        }

      }else{
        li[i].style.display="none";
      }
    }
  }

/**formulario de inscripcion */
$(document).ready(function() {

  var state = false;

  //$("input:text:visible:first").focus();

  $('#accesspanel').on('submit', function(e) {

      e.preventDefault();

      state = !state;

      if (state) {
          document.getElementById("litheader").className = "poweron";
          document.getElementById("go").className = "";
          document.getElementById("go").value = "Initializing...";
      }else{
          document.getElementById("litheader").className = "";
          document.getElementById("go").className = "denied";
          document.getElementById("go").value = "Access Denied";
      }

  });

});


  


