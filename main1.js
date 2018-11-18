document.getElementById("bookingform").style.display = "none";
document.getElementById("cost").style.display = "none";
function BookNow(car) {
        var x = document.getElementById("bookingform");
        x.style.display = "block";
}

//sticky navbar
window.onscroll = function () { myFunction() };

var navbar = document.getElementById("topnav");

var sticky = navbar.offsetTop;

function myFunction() {
        if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
        } else {
                navbar.classList.remove("sticky");
        }
}
//end:sticky navbar