function mobileMenu() {
  let nav = document.getElementById("nav");
  if (nav.className === "topnav") {
      nav.className += " responsive";
  } else {
      nav.className = "topnav";
  }
}

/* script pour le fil */


if (document.location.pathname == '/fil-d-ariane/pages/landing-page.php') {
  
  document.getElementById('img').classList.add('img-landing');

  window.onscroll = function() { scrollIndicator() } ;

  function scrollIndicator() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("img").style.strokeDashoffset = (1990)-scrolled + "rem";
  }

} else if (document.location.pathname == '/fil-d-ariane/pages/lexique.php') {
            document.getElementById('img').style.display = 'none';
          
} else if(document.location.pathname == '/fil-d-ariane/pages/Accessible_web.php') {
  document.getElementById('img').style.display = 'none';
} else if(document.location.pathname == '/fil-d-ariane/pages/web-et-senior.php') {
  document.getElementById('img').style.display = 'none';
} else if(document.location.pathname == '/fil-d-ariane/pages/illectronisme.php') {
  document.getElementById('img').style.display = 'none';
} else if(document.location.pathname == '/fil-d-ariane/pages/web-et-senior.php') {
  document.getElementById('img').style.display = 'none';
} else {
  window.onscroll = function() { scrollIndicator() } ;
  
  function scrollIndicator() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("img").style.strokeDashoffset = (1990)-scrolled + "rem";
  };
};


/* bouton haut de page */
/* $(function(){
  $("#monBouton").click(function(){
      $("html, body").animate({scrollTop: 0},"slow");
  });
});
 */

