

// scripts/script.js


// Function to load HTML content into a specified element// Function to load HTML content into a specified element
function loadHTML(elementId, filePath) {
  fetch(filePath)
      .then(response => response.text())
      .then(data => {
          document.getElementById(elementId).innerHTML = data;
      })
      .catch(error => console.error('Error loading HTML:', error));
}

function displayFooter() {
  const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');
  
  // Hide both footers initially
  document.getElementById('footer-black').style.display = 'none';
  document.getElementById('footer-white').style.display = 'none';

  // Show the correct footer based on the data type
  if (footerType === 'black') {
      document.getElementById('footer-black').style.display = 'block';
  } else {
      document.getElementById('footer-white').style.display = 'block';
  }
}

// DISPLAY NAVBAR & FOOTER
document.addEventListener("DOMContentLoaded", function() {
  loadHTML('navbar-placeholder', 'components/navbar.html'); // Load navbar
  displayFooter(); // Display the correct footer based on type



/*=============== SHOW MENU ===============*/
 // SHOW MENU


 const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  // Check if the toggle and nav elements exist
  if (!toggle || !nav) {
    console.error(`Error: Toggle or navigation menu element not found. Toggle ID: ${toggleId}, Nav ID: ${navId}`);
    return;
  }

  toggle.addEventListener('click', () => {
    // Add show-menu class to nav menu
    nav.classList.toggle('show-menu');

    // Add show-icon to show and hide the menu icon
    toggle.classList.toggle('show-icon');
  });
};

showMenu('nav-toggle', 'nav-menu');
});


// Back to top button //


 //Get the button
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
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
 }

 function backToTop() {
    // Use the window.scrollTo method with behavior 'smooth'
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // This enables smooth scrolling
    });
}