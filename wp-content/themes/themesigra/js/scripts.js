


if (document.querySelector('.swiper_subsides')) {
    const opciones = {
        slidesPerView: 2,
        loop: false,
        autoplay: {
            delay: 3000
        }
    }
    new Swiper('.swiper_subsides', opciones);
}

if (document.querySelector('.mySwiper')) {
    const opciones = {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        }
    }
    new Swiper('.mySwiper', opciones);
}

if (document.querySelector('.mySwiper_m')) {
    const opciones = {
        rewind: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    }
    new Swiper('.mySwiper_m', opciones);
}


const hamburger = document.querySelector('.hamburguer-menu svg')
hamburger.addEventListener('click', function () {
    const menuPrincipal = document.querySelector('.container-menu');
    menuPrincipal.classList.toggle('mostrar');
})

var $ = jQuery;
$(".js-modal-btn").modalVideo({ channel: 'vimeo' });

$(".form_chercher").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    console.log(value);

    $(".swiper-slide").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });

});


// $(document).ready(function () {
//     $("#hamburguer-menu").click(function () {
//         $('.container-menu').toggleClass('mostrar');

//     });
// });

// $(".js-modal-btn").modalVideo({ channel: 'vimeo' });
// function gymWordPress() {
//     alert('hola');
//     if (document.querySelector('.swiper')) {
//         const opciones = {
//             loop: true,
//             autoplay: {
//                 delay: 3000
//             }
//         }
//         new Swiper('.swiper', opciones);
//     }



//     const hamburger = document.querySelector('.hamburguer-menu svg')
//     hamburger.addEventListener('click', function () {
//         const menuPrincipal = document.querySelector('.contenedor-menu');
//         menuPrincipal.classList.toggle('mostrar');
//     })

// }

// document.addEventListener('DOMContentLoaded', gymWordPress)