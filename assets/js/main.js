document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.main-navigation ul');

    if (!toggle || !menu) {
        console.log('MENU ELEMENTS NOT FOUND');
        return;
    }

    toggle.addEventListener('click', function () {
        menu.classList.toggle('active');
        console.log('MENU TOGGLED');
    });

});



