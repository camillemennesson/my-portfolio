

// scripts/script.js

//NAVBAR
document.addEventListener("DOMContentLoaded", function() {
    const navbarType = document.getElementById('navbar-placeholder').getAttribute('data-navbar-type');

    fetch('components/navbar.html')
        .then(response => response.text())
        .then(data => {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;

            const navbarWhite = tempDiv.querySelector('#navbar-white');
            const navbarBlack = tempDiv.querySelector('#navbar-black');

            const navbarPlaceholder = document.getElementById('navbar-placeholder');
            if (navbarType === 'black') {
                navbarPlaceholder.appendChild(navbarBlack);
            } else {
                navbarPlaceholder.appendChild(navbarWhite);
            }
        })
        .catch(error => console.error('Error loading navbar:', error));
});

// TOGGLE BURGER MENU
document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const navMenu = document.querySelector('.nav-menu');

    if (burgerMenu && navMenu) {
        burgerMenu.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    } else {
        console.error('Burger menu or nav menu not found');
    }
});

// FOOTER
document.addEventListener("DOMContentLoaded", function() {
    const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');

    fetch('components/footer.html')
        .then(response => response.text())
        .then(data => {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;

            const footerWhite = tempDiv.querySelector('#footer-white');
            const footerBlack = tempDiv.querySelector('#footer-black');

            const footerPlaceholder = document.getElementById('footer-placeholder');
            if (footerType === 'black') {
                footerPlaceholder.appendChild(footerBlack);
            } else {
                footerPlaceholder.appendChild(footerWhite);
            }
        })
        .catch(error => console.error('Error loading navbar:', error));
});


// SLIDER
  let currentIndex = 0; // Starting index for the slides
const slides = document.querySelectorAll('.slide'); // Select all slides

function changeSlide(direction) {
    slides[currentIndex].classList.remove('active'); // Hide current slide
    currentIndex += direction; // Move to the next or previous slide

    // Wrap around if necessary
    if (currentIndex < 0) {
        currentIndex = slides.length - 1; // Go to last slide
    } else if (currentIndex >= slides.length) {
        currentIndex = 0; // Go to first slide
    }

    slides[currentIndex].classList.add('active'); // Show new slide
}