document.addEventListener("DOMContentLoaded", function () {
    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

            everyitem.addEventListener('mouseover', function (e) {

                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }

            });
            everyitem.addEventListener('mouseleave', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }


            })
        });

    }
    // end if innerWidth
});
// DOMContentLoaded  end


// Navbar fixed top
document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';

            //show left logo
            document.getElementById("logo").style.display = "block";

            // 
            document.getElementById("navbar-text-btn").style.display = "none";


            //show footer ads
            document.getElementById("footer-ad-dv").style.display = "block";
        } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
            
            //remove left logo
            document.getElementById("logo").style.display = "none";

            document.getElementById("navbar-text-btn").style.display = "block";

            //hide footer ads
            document.getElementById("footer-ad-dv").style.display = "none";
        }
    });
});
// DOMContentLoaded  end

// RightSide Menu show/hide on click

/*************ads hide btn************** */
var footerAd = document.getElementById('footer-ad-dv');
var footerAdHideBtn = document.getElementById('footer-ad-down');

footerAdHideBtn.addEventListener('click', function () {
    var ctr = 1;
    footerAd.className = footerAd.className !== 'show' ? 'show' : 'hide';
    console.log(footerAd.className);
    if (footerAd.className === 'show') {
        footerAd.style.display = 'block';
        window.setTimeout(function () {
            footerAd.style.opacity = 1;
            footerAd.style.transform = 'scale(1)';
        }, 0);
    }
    if (footerAd.className === 'hide') {
        footerAd.style.opacity = 0;
        footerAd.style.transform = 'scale(0)';
        window.setTimeout(function () {
            footerAd.style.display = 'none';
        }, 700); // timed to match animation-duration
    }

});

/*************End of ads hide btn************** */


/*************Back To Top************** */
// Get the button
let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
/*************End Back To Top********** */

let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})