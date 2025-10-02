// scripts/script.js
document.addEventListener("DOMContentLoaded", function() {

  // -------------------------------
  // Back-to-top button
  // -------------------------------
  const mybutton = document.getElementById("btn-back-to-top");
  if (mybutton) {
    window.addEventListener("scroll", () => {
      mybutton.style.display = window.scrollY > 20 ? "block" : "none";
    });

    mybutton.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // -------------------------------
  // Sticky TOC
  // -------------------------------
  const toc = document.getElementById('sticky-toc');
  const challengeSection = document.getElementById('challenge');
  if (toc && challengeSection) {
    const sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];
    const tocLinks = toc.querySelectorAll('a');
    toc.style.display = 'none'; // initially hidden

    window.addEventListener('scroll', () => {
      const scrollPosition = window.scrollY;

      // Show/hide TOC
      toc.style.display = scrollPosition >= challengeSection.offsetTop - 50 ? 'block' : 'none';

      // Highlight active section
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

  // -------------------------------
  // Floating menu active state icons
  // -------------------------------
  document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
    }
  });

  // -------------------------------
  // Fetch Navbar
  // -------------------------------
  const navbarType = document.getElementById('navbar-placeholder')?.getAttribute('data-navbar-type');
  if (navbarType) {
    fetch('components/navbar.html?v=' + Date.now())
      .then(response => response.text())
      .then(data => {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;

        const navbarWhite = tempDiv.querySelector('#navbar-white');
        const navbarBlack = tempDiv.querySelector('#navbar-black');
        const navbarPlaceholder = document.getElementById('navbar-placeholder');

        if (navbarPlaceholder) {
          if (navbarType === 'black' && navbarBlack) navbarPlaceholder.appendChild(navbarBlack);
          else if (navbarWhite) navbarPlaceholder.appendChild(navbarWhite);
        }
      });
  }

  // -------------------------------
  // Fetch Footer
  // -------------------------------
  const footerType = document.getElementById('footer-placeholder')?.getAttribute('data-footer-type');
  if (footerType) {
    fetch('components/footer.html')
      .then(response => response.text())
      .then(data => {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;

        const footerWhite = tempDiv.querySelector('#footer-white');
        const footerBlack = tempDiv.querySelector('#footer-black');
        const footerPlaceholder = document.getElementById('footer-placeholder');

        if (footerPlaceholder) {
          if (footerType === 'black' && footerBlack) footerPlaceholder.appendChild(footerBlack);
          else if (footerWhite) footerPlaceholder.appendChild(footerWhite);
        }
      });
  }

  // -------------------------------
  // Fetch Floating Nav
  // -------------------------------
  const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
  if (floatingNavPlaceholder) {
    fetch('components/floating-nav.html')
      .then(response => {
        if (!response.ok) throw new Error('Network response was not ok');
        return response.text();
      })
      .then(data => floatingNavPlaceholder.innerHTML = data)
      .catch(error => console.error('Floating nav fetch error:', error));
  }

});

