// script.js
document.addEventListener('mousemove', (e) => {
    const unicornFollower = document.querySelector('.unicorn-follower');
    unicornFollower.style.transform = `translate(${e.clientX - 25}px, ${e.clientY - 25}px)`; // Center the unicorn
});


//NAVBAR MENU
        function toggleMenu() {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.getElementById('burger-menu');
    const navLinks = document.getElementById('nav-links');

    burgerMenu.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
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
