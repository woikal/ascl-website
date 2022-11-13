let header = document.getElementById('main-navigation');
let totop = document.getElementById('back-to-top');

document.addEventListener('scroll',
    e => {
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
            totop.classList.add('show');
        }
        else {
            header.classList.remove('scrolled');
            totop.classList.remove('show');
        }
    });
