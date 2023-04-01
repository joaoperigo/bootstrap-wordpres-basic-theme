//use window.scrollY
var scrollpos = window.scrollY;
var header = document.getElementById("menu-top-korin");

function add_class_on_scroll() {
    header.classList.add("bg-white");
}

function remove_class_on_scroll() {
    header.classList.remove("bg-white");
}

window.addEventListener('scroll', function(){ 
    //Here you forgot to update the value
    scrollpos = window.scrollY;

    if(scrollpos > 10){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
    console.log(scrollpos);
});