

// scripts/script.js

// DISPLAY NAVBAR & FOOTER AND INITIALIZE BURGER MENU
document.addEventListener("DOMContentLoaded", function() {
    const navbarType = document.getElementById('navbar-placeholder').getAttribute('data-navbar-type');
    const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');

    // Fetch and display navbar
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

            // Initialize burger menu after navbar is loaded
            initializeBurgerMenu();
        });

    // Fetch and display footer
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
        });

    // Function to initialize burger menu
    function initializeBurgerMenu() {
        const burgerMenu = document.querySelector('.burger-menu');
        const navMenu = document.querySelector('.nav-menu');

        if (burgerMenu && navMenu) {
            burgerMenu.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                burgerMenu.classList.toggle('active'); // Toggle active class on burger menu
            });
        } else {
            console.error('Burger menu or nav menu not found');
        }
    }
});



