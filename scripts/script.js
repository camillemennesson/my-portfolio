
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

document.querySelectorAll(".nav-link").forEach((link) => {
  if (link.href === window.location.href) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
  }
});

// TOC sticky and highlight script moved from Riseup.php

const toc = document.getElementById('sticky-toc');
console.log("✅ TOC element is:", toc);

if (toc) {
    const sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];
    const tocLinks = toc.querySelectorAll('a');
    const challengeSection = document.getElementById('challenge');

    // Show TOC only after scrolling to challenge section
    window.addEventListener('scroll', () => {
      console.log("📜 scroll:", window.scrollY);
        const scrollPosition = window.scrollY || window.pageYOffset;
        const challengeTop = challengeSection.offsetTop;

        // Adjust threshold to show TOC a bit earlier
        if (scrollPosition + window.innerHeight * 0.25 >= challengeTop) {
            toc.style.display = 'block';
        } else {
            toc.style.display = 'none';
        }

        // Highlight current section in TOC
        let currentSection = sections[0];
        for (let section of sections) {
            const sectionElement = document.getElementById(section);
            if (sectionElement.offsetTop <= scrollPosition + 100) {
                currentSection = section;
            }
        }

        tocLinks.forEach(link => {
            if (link.getAttribute('href') === '#' + currentSection) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
}

});


