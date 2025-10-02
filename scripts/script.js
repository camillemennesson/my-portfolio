// scripts/script.js
document.addEventListener("DOMContentLoaded", function () {

  console.log("DOM fully loaded");

  // --- Elements ---
  const mybutton = document.getElementById("btn-back-to-top");
  const toc = document.getElementById("sticky-toc");
  const challengeSection = document.getElementById("challenge");
  let tocLinks = [];
  let sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];

  // --- Debug info ---
  if (!mybutton) console.warn("Back-to-top button not found");
  if (!toc) console.warn("TOC not found");
  if (!challengeSection) console.warn("Challenge section not found");
  if (toc) tocLinks = toc.querySelectorAll("a");

  // Force TOC and button visible for debugging
  if (mybutton) {
    mybutton.style.display = "block";
    mybutton.style.background = "red"; // easier to see
  }
  if (toc) {
    toc.style.display = "block";
    toc.style.backgroundColor = "rgba(255, 0, 0, 0.3)"; // semi-transparent red
    toc.style.zIndex = 999999;
  }

  // --- Scroll listener ---
  window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY;
    console.log("Scroll position:", scrollPosition);

    // Back-to-top logic
    if (mybutton) {
      if (scrollPosition > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // TOC logic
    if (toc && challengeSection) {
      if (scrollPosition + window.innerHeight * 0.25 >= challengeSection.offsetTop) {
        toc.style.display = "block";
      } else {
        toc.style.display = "none";
      }

      // Highlight current section
      let currentSection = sections[0];
      for (let id of sections) {
        const section = document.getElementById(id);
        if (!section) continue;
        if (scrollPosition >= section.offsetTop - 100) currentSection = id;
      }

      tocLinks.forEach(link => {
        if (link.getAttribute("href") === "#" + currentSection) {
          link.classList.add("active");
          console.log("Active TOC link:", link.textContent);
        } else {
          link.classList.remove("active");
        }
      });
    }
  });

  // Back-to-top click
  if (mybutton) {
    mybutton.addEventListener("click", () => {
      console.log("Back-to-top clicked");
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // --- Navbar & Footer Fetch (unchanged) ---
  const navbarType = document.getElementById('navbar-placeholder')?.getAttribute('data-navbar-type');
  const footerType = document.getElementById('footer-placeholder')?.getAttribute('data-footer-type');

  fetch('components/navbar.html?v=' + Date.now())
    .then(r => r.text())
    .then(data => {
      const tempDiv = document.createElement('div');
      tempDiv.innerHTML = data;
      const navbarWhite = tempDiv.querySelector('#navbar-white');
      const navbarBlack = tempDiv.querySelector('#navbar-black');
      const navbarPlaceholder = document.getElementById('navbar-placeholder');
      if (navbarPlaceholder) {
        navbarPlaceholder.appendChild(navbarType === 'black' ? navbarBlack : navbarWhite);
      }
    });

  fetch('components/footer.html')
    .then(r => r.text())
    .then(data => {
      const tempDiv = document.createElement('div');
      tempDiv.innerHTML = data;
      const footerWhite = tempDiv.querySelector('#footer-white');
      const footerBlack = tempDiv.querySelector('#footer-black');
      const footerPlaceholder = document.getElementById('footer-placeholder');
      if (footerPlaceholder) {
        footerPlaceholder.appendChild(footerType === 'black' ? footerBlack : footerWhite);
      }
    });

  // Floating nav
  fetch('components/floating-nav.html')
    .then(r => r.text())
    .then(data => {
      const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
      if (floatingNavPlaceholder) floatingNavPlaceholder.innerHTML = data;
    })
    .catch(e => console.error('Floating nav fetch error:', e));

});

