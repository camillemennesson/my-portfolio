// script.js


// NAVBAR
// script.js
document.addEventListener("DOMContentLoaded", function() {
    const navbarType = document.getElementById('navbar-placeholder').getAttribute('data-navbar-type');

    fetch('navbar.html')
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

// FOOTER
document.addEventListener("DOMContentLoaded", function() {
    const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');

    fetch('footer.html')
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

// BACK TO TOP BUTTON
// Get the button
const backToTopButton = document.getElementById('backToTopButton');

// Show or hide the button based on scroll position
window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = "block"; // Show button
    } else {
        backToTopButton.style.display = "none"; // Hide button
    }
};


// Smooth scroll to top when button is clicked
backToTopButton.onclick = function(event) {
    event.preventDefault(); // Prevent default anchor behavior
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll effect
    });
};


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