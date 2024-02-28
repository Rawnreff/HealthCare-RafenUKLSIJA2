// navigator bar
document.addEventListener("DOMContentLoaded", function() {
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      var navbar = document.querySelector(".navbar");
      if (prevScrollpos > currentScrollPos) {
        navbar.style.marginTop = "-70px";
      } else {
        navbar.style.marginTop = "-141px";
      }
      prevScrollpos = currentScrollPos;
    };
  });