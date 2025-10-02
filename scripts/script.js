// scripts/script.js

document.addEventListener("DOMContentLoaded", function() {

// DISPLAY NAVBAR & FOOTER AND INITIALIZE BURGER MENU
  const navbarType = document.getElementById('navbar-placeholder').getAttribute('data-navbar-type');
  const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');

  // Fetch and display navbar
  fetch('components/navbar.html?v=' + Date.now())
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


const mybutton = document.getElementById("btn-back-to-top");

if (mybutton) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  });

  mybutton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
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

document.querySelectorAll(".nav-link").forEach((link) => {
  if (link.href === window.location.href) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
  }
});

// TOC sticky and highlight script moved from Riseup.php

const toc = document.getElementById('sticky-toc');
const challengeSection = document.getElementById('challenge');

if (toc && challengeSection) {
  const sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];
  const tocLinks = toc.querySelectorAll('a');

  // hide initially
  toc.style.display = 'none';

  window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;

    // Show/hide TOC
    toc.style.display = scrollPosition >= challengeSection.offsetTop - 50 ? 'block' : 'none';

    // Highlight section
    let currentSection = sections[0];
    for (let id of sections) {
      const section = document.getElementById(id);
      if (!section) continue;
      if (scrollPosition >= section.offsetTop - 100) currentSection = id;
    }

    tocLinks.forEach(link => {
      link.classList.toggle('active', link.getAttribute('href') === '#' + currentSection);
    });
  });
}


});
