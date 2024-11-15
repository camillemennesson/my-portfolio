// script.js



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
