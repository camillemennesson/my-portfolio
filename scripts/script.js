

// scripts/script.js


// Function to load HTML content into a specified element
function loadHTML(elementId, filePath) {
    fetch(filePath)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
        })
        .catch(error => console.error('Error loading HTML:', error));
}

// DISPLAY NAVBAR & FOOTER
document.addEventListener("DOMContentLoaded", function() {
    loadHTML('navbar-placeholder', 'components/navbar.html'); // Load navbar
    loadHTML('footer-placeholder', 'components/footer.html'); // Load footer
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
