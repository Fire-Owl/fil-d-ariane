function mobileMenu() {
  let nav = document.getElementById("nav");
  if (nav.className === "topnav") {
      nav.className += " responsive";
  } else {
      nav.className = "topnav";
  }
}

/* script pour le fil */

window.onscroll = function() { scrollIndicator() } ;
function scrollIndicator() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("img").style.strokeDashoffset = (1990)-scrolled + "rem";
      };
