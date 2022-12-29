let header = document.getElementsByClassName('top-navigation')[0];
let totop = document.getElementsByClassName('back-to-top')[0];

document.addEventListener('scroll',
    e => {
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
            totop.classList.add('show');
        } else {
            header.classList.remove('scrolled');
            totop.classList.remove('show');
        }
    }
);
