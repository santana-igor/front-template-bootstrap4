window.onload = function() {
    var nav = document.getElementById('nav');
    window.addEventListener("scroll", function(event) {
            if(window.pageYOffset>90){

                nav.style.background = "#4a90e2ff";
                nav.classList.add("shadow");

            }
            else{
                nav.style.background = "transparent";
                nav.classList.remove("shadow");
            }
        });
}