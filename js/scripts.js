window.onload = function() {
  var logo = document.getElementById("logo");
  var nav = document.getElementById("scrolling");
  var navbarCollapse = document.getElementById("navbar-nav-collapse");
  var scrollPosition = this.scrollY;

  if (scrollPosition > 90) {

    nav.style.background = "#4a90e2ff";
    nav.style.height = "80px";
    nav.classList.add("shadow");
    logo.style.height = "60px";


  } else {

    nav.style.background = "transparent";
    nav.style.height = "150px";
    nav.classList.remove("shadow");
    logo.style.height = "90px";


  }

  window.addEventListener("scroll", function(event) {

    if (window.pageYOffset > 90) {

      nav.style.background = "#4a90e2ff";
      nav.style.height = "80px";
      nav.classList.add("shadow");
      logo.style.height = "60px";


    } else {

      navbarCollapse.style.background = "transparent";
      nav.style.background = "transparent";
      nav.style.height = "150px";
      nav.classList.remove("shadow");
      logo.style.height = "90px";


    }
  });
};
