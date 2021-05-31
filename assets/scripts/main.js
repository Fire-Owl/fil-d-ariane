function mobileMenu() {
  let nav = document.getElementById("nav");
  if (nav.className === "topnav") {
      nav.className += " responsive";
  } else {
      nav.className = "topnav";
  }
}