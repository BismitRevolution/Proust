$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");

    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.select').formSelect();

    // var isActive = false;
    // var hamburger = document.getElementById('hamburger');
    // hamburger.onclick = function (e) {
    //     console.log('clicked');
    //     if (isActive) {
    //         $('#hamburger').removeClass('is-active');
    //     } else {
    //         $('#hamburger').addClass('is-active');
    //     }
    //     isActive = !isActive;
    // }
});
