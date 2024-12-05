
// scripts/script.js

document.addEventListener("DOMContentLoaded", function() {

// DISPLAY NAVBAR & FOOTER AND INITIALIZE BURGER MENU
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
      
// Floating Nav
      fetch('components/floating-nav.html')
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.text();
      })
      .then(data => {
          const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
          floatingNavPlaceholder.innerHTML = data; // Insert the fetched HTML
      })
      .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
      });

      let currentActiveIcon = null; // Variable to store the currently active icon


// Back to top button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  // Use the window.scrollTo method with behavior 'smooth'
  window.scrollTo({
      top: 0,
      behavior: 'smooth' // This enables smooth scrolling
  });
}

//Floating Menu Active State Icons

 // Get the current page URL
 const currentUrl = window.location.pathname;

 // Get all navigation links
 const navLinks = document.querySelectorAll('.nav-link');

 // Loop through each navigation link
 navLinks.forEach(link => {
     // Check if the link's href matches the current URL
     if (link.getAttribute('href') === currentUrl) {
         // Add the 'active' class to the matching link
         link.classList.add('active');
     }
 });


});


