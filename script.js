// script.js
document.addEventListener('mousemove', (e) => {
    const unicornFollower = document.querySelector('.unicorn-follower');
    unicornFollower.style.transform = `translate(${e.clientX - 25}px, ${e.clientY - 25}px)`; // Center the unicorn
});


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
