// scripts/script.js

document.addEventListener("DOMContentLoaded", function () {

    console.log("DOM fully loaded");

    // -------------------------------
    // DEBUG SCROLL HANDLER
    // -------------------------------
    const wrapper = document.getElementById("wrapper");
    const mybutton = document.getElementById("btn-back-to-top");
    const toc = document.getElementById("sticky-toc");
    const challengeSection = document.getElementById("challenge");

    let tocLinks = [];
    const sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];

    if (!wrapper) console.warn("Wrapper not found");
    if (!mybutton) console.warn("Back-to-top button not found");
    if (!toc) console.warn("TOC not found");
    if (!challengeSection) console.warn("Challenge section not found");
    if (toc) tocLinks = toc.querySelectorAll("a");

    // Show buttons initially for debug
    if (mybutton) mybutton.style.display = "block";
    if (toc) toc.style.display = "block";

    const scrollable = wrapper || window;

    scrollable.addEventListener("scroll", () => {
        if (toc && challengeSection) {
    toc.style.display = scrollPosition >= challengeSection.offsetTop - 50 ? 'block' : 'none';
    console.log('TOC display:', toc.style.display, 'Scroll position:', scrollPosition, 'Challenge top:', challengeSection.offsetTop);
}

        const scrollPosition = wrapper ? wrapper.scrollTop : window.scrollY;
        console.log("Scroll detected! Position:", scrollPosition);

        // --- Back-to-top button ---
        if (mybutton) {
            mybutton.style.display = scrollPosition > 20 ? "block" : "none";
        }

        // --- Sticky TOC ---
        if (toc && challengeSection) {
            const challengeThreshold = challengeSection.offsetTop - 50;
            toc.style.display = scrollPosition + (wrapper ? wrapper.clientHeight : window.innerHeight) * 0.25 >= challengeThreshold ? "block" : "none";

            // Highlight current section
            let currentSection = sections[0];
            for (let id of sections) {
                const section = document.getElementById(id);
                if (!section) continue;
                if (scrollPosition >= section.offsetTop - 100) currentSection = id;
            }
            tocLinks.forEach(link => {
                link.classList.toggle('active', link.getAttribute("href") === "#" + currentSection);
            });
        }
    });

    // --- Back-to-top click handler ---
    if (mybutton) {
        mybutton.addEventListener("click", () => {
            if (wrapper) {
                wrapper.scrollTo({ top: 0, behavior: "smooth" });
            } else {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }
        });
    }

    // -------------------------------
    // NAVBAR & FOOTER FETCH
    // -------------------------------
    const navbarType = document.getElementById('navbar-placeholder')?.getAttribute('data-navbar-type');
    const footerType = document.getElementById('footer-placeholder')?.getAttribute('data-footer-type');

    // Fetch Navbar
    fetch('components/navbar.html?v=' + Date.now())
        .then(response => response.text())
        .then(data => {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;
            const navbarWhite = tempDiv.querySelector('#navbar-white');
            const navbarBlack = tempDiv.querySelector('#navbar-black');
            const navbarPlaceholder = document.getElementById('navbar-placeholder');
            if (!navbarPlaceholder) return;
            if (navbarType === 'black') navbarPlaceholder.appendChild(navbarBlack);
            else navbarPlaceholder.appendChild(navbarWhite);
        })
        .catch(err => console.error("Navbar fetch error:", err));

    // Fetch Footer
    fetch('components/footer.html')
        .then(response => response.text())
        .then(data => {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;
            const footerWhite = tempDiv.querySelector('#footer-white');
            const footerBlack = tempDiv.querySelector('#footer-black');
            const footerPlaceholder = document.getElementById('footer-placeholder');
            if (!footerPlaceholder) return;
            if (footerType === 'black') footerPlaceholder.appendChild(footerBlack);
            else footerPlaceholder.appendChild(footerWhite);
        })
        .catch(err => console.error("Footer fetch error:", err));

    // Fetch Floating Nav
    fetch('components/floating-nav.html')
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.text();
        })
        .then(data => {
            const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
            if (!floatingNavPlaceholder) return;
            floatingNavPlaceholder.innerHTML = data;
        })
        .catch(error => console.error('Floating nav fetch error:', error));

    // -------------------------------
    // ACTIVE STATE FOR NAV LINKS
    // -------------------------------
    document.querySelectorAll(".nav-link").forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        }
    });

});
