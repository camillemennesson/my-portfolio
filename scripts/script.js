
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

function toggleActive(element) {
  // Remove active class from all icons
  const icons = document.querySelectorAll('.nav-icon');
  icons.forEach(icon => icon.classList.remove('active'));
  
  // Add active class to the clicked icon
  element.classList.add('active');
}


});


