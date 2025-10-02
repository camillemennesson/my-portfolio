// scripts/script.js

document.addEventListener("DOMContentLoaded", function() {

  // -------------------------------
  // DISPLAY NAVBAR & FOOTER
  // -------------------------------
  const navbarPlaceholder = document.getElementById('navbar-placeholder');
  const footerPlaceholder = document.getElementById('footer-placeholder');
  const navbarType = navbarPlaceholder ? navbarPlaceholder.getAttribute('data-navbar-type') : 'white';
  const footerType = footerPlaceholder ? footerPlaceholder.getAttribute('data-footer-type') : 'white';

  // Fetch and display navbar
  if (navbarPlaceholder) {
    fetch('components/navbar.html?v=' + Date.now())
      .then(response => response.text())
      .then(data => {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;

        const navbarWhite = tempDiv.querySelector('#navbar-white');
        const navbarBlack = tempDiv.querySelector('#navbar-black');

        if (navbarType === 'black' && navbarBlack) {
          navbarPlaceholder.appendChild(navbarBlack);
        } else if (navbarWhite) {
          navbarPlaceholder.appendChild(navbarWhite);
        }
      })
      .catch(err => console.error('Navbar fetch error:', err));
  }

  // Fetch and display footer
  if (footerPlaceholder) {
    fetch('components/footer.html')
      .then(response => response.text())
      .then(data => {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;

        const footerWhite = tempDiv.querySelector('#footer-white');
        const footerBlack = tempDiv.querySelector('#footer-black');

        if (footerType === 'black' && footerBlack) {
          footerPlaceholder.appendChild(footerBlack);
        } else if (footerWhite) {
          footerPlaceholder.appendChild(footerWhite);
        }
      })
      .catch(err => console.error('Footer fetch error:', err));
  }

  // -------------------------------
  // FLOATING NAV
  // -------------------------------
  const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
  if (floatingNavPlaceholder) {
    fetch('components/floating-nav.html')
      .then(response => {
        if (!response.ok) throw new Error('Network response not ok');
        return response.text();
      })
      .then(data => {
        floatingNavPlaceholder.innerHTML = data;
      })
      .catch(err => console.error('Floating nav fetch error:', err));
  }

  // -------------------------------
  // BACK TO TOP BUTTON
  // -------------------------------
  const backToTopBtn = document.getElementById("btn-back-to-top");
  if (backToTopBtn) {
    backToTopBtn.style.display = 'none'; // hide initially

    backToTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // -------------------------------
  // STICKY TOC
  // -------------------------------
  const toc = document.getElementById('sticky-toc');
  const challengeSection = document.getElementById('challenge');
  let tocLinks, sections;

  if (toc && challengeSection) {
    toc.style.display = 'none'; // hide initially
    tocLinks = toc.querySelectorAll('a');
    sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];
  }

  // -------------------------------
  // FLOATING MENU ACTIVE STATE
  // -------------------------------
  document.querySelectorAll(".nav-link").forEach(link => {
    if (link.href === window.location.href) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
    }
  });

  // -------------------------------
  // SINGLE SCROLL LISTENER
  // -------------------------------
  window.addEventListener('scroll', () => {
    console.log('Scroll event fired:', window.scrollY);

    const scrollPosition = window.scrollY || window.pageYOffset;

    // Back-to-top button
    if (backToTopBtn) {
      backToTopBtn.style.display = scrollPosition > 20 ? 'block' : 'none';
    }

    // Sticky TOC
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

});
