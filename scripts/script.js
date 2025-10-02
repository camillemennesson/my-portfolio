// scripts/script.js

document.addEventListener("DOMContentLoaded", function() {
  // -------------------------------
  // SELECT ELEMENTS
  // -------------------------------
  const wrapper = document.getElementById('wrapper');
  const mybutton = document.getElementById("btn-back-to-top");
  const toc = document.getElementById('sticky-toc');
  const challengeSection = document.getElementById('challenge');
  let tocLinks, sections;

  if (toc && challengeSection) {
    tocLinks = toc.querySelectorAll('a');
    sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];
    toc.style.display = 'none'; // hide initially
  }

  if (mybutton) {
    mybutton.style.display = 'none'; // hide initially
  }

  // -------------------------------
  // SCROLL LISTENER
  // -------------------------------
  if (wrapper) {
    wrapper.addEventListener('scroll', () => {
      const scrollPosition = wrapper.scrollTop;

      // --- Back-to-top button ---
      if (mybutton) {
        mybutton.style.display = scrollPosition > 20 ? 'block' : 'none';
      }

      // --- Sticky TOC ---
      if (toc && challengeSection) {
        toc.style.display = scrollPosition >= challengeSection.offsetTop - 50 ? 'block' : 'none';

        // Highlight current section
        let currentSection = sections[0];
        for (let id of sections) {
          const section = document.getElementById(id);
          if (!section) continue;
          if (scrollPosition >= section.offsetTop - 100) currentSection = id;
        }

        tocLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === '#' + currentSection);
        });
      }
    });
  }

  // -------------------------------
  // BACK-TO-TOP BUTTON CLICK
  // -------------------------------
  if (mybutton) {
    mybutton.addEventListener("click", () => {
      wrapper.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // -------------------------------
  // FLOATING MENU ACTIVE STATE
  // -------------------------------
  document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active");
        link.setAttribute("aria-current", "page");
    }
  });

  // -------------------------------
  // FETCH NAVBAR
  // -------------------------------
  const navbarType = document.getElementById('navbar-placeholder').getAttribute('data-navbar-type');
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

  // -------------------------------
  // FETCH FOOTER
  // -------------------------------
  const footerType = document.getElementById('footer-placeholder').getAttribute('data-footer-type');
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

  // -------------------------------
  // FETCH FLOATING NAV
  // -------------------------------
  fetch('components/floating-nav.html')
      .then(response => {
          if (!response.ok) throw new Error('Network response was not ok');
          return response.text();
      })
      .then(data => {
          const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
          floatingNavPlaceholder.innerHTML = data;
      })
      .catch(error => console.error('Fetch error:', error));

});
