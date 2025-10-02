// scripts/script.js

document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM fully loaded");

    // -------------------------------
    // ELEMENT SELECTORS
    // -------------------------------
    const wrapper = document.getElementById("wrapper");
    const mybutton = document.getElementById("btn-back-to-top");
    const toc = document.getElementById("sticky-toc");
    const introImage = document.querySelector(".intro-image"); // TOC appears after this
    let tocLinks = [];
    const sections = ['challenge', 'process', 'solution', 'results', 'nextsteps'];

    if (!wrapper) console.warn("Wrapper not found");
    if (!mybutton) console.warn("Back-to-top button not found");
    if (!toc) console.warn("TOC not found");
    if (!introImage) console.warn("Intro image not found");
    if (toc) tocLinks = toc.querySelectorAll("a");

    // Hide TOC and back-to-top button initially
    if (toc) toc.style.display = "none";
    if (mybutton) mybutton.style.display = "none";

    const scrollable = wrapper || window;

    // -------------------------------
    // SCROLL HANDLER
    // -------------------------------
    const handleScroll = () => {
        const scrollPosition = wrapper ? wrapper.scrollTop : window.scrollY;

        // --- Back-to-top button ---
        if (mybutton) {
            mybutton.style.display = scrollPosition > 20 ? "block" : "none";
        }

        // --- Sticky TOC ---
        if (toc && introImage) {
            const introTop = introImage.offsetTop;
            toc.style.display = scrollPosition >= introTop ? "block" : "none";

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
    };

    // Attach scroll listener
    scrollable.addEventListener("scroll", handleScroll);

    // Run once on load to respect initial scroll position
    handleScroll();

    // -------------------------------
    // BACK-TO-TOP BUTTON CLICK
    // -------------------------------
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
    // TOC SMOOTH SCROLL
    // -------------------------------
    if (tocLinks.length) {
        tocLinks.forEach(link => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                const targetId = link.getAttribute("href").substring(1);
                const targetSection = document.getElementById(targetId);
                if (!targetSection) return;

                const offsetTop = targetSection.offsetTop - 80; // sticky TOC offset
                if (wrapper) {
                    wrapper.scrollTo({ top: offsetTop, behavior: "smooth" });
                } else {
                    window.scrollTo({ top: offsetTop, behavior: "smooth" });
                }
            });
        });
    }

    // -------------------------------
    // NAVBAR & FOOTER FETCH
    // -------------------------------
    const navbarType = document.getElementById('navbar-placeholder')?.getAttribute('data-navbar-type');
    const footerType = document.getElementById('footer-placeholder')?.getAttribute('data-footer-type');

    fetch('components/navbar.html?v=' + Date.now())
        .then(res => res.text())
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

    fetch('components/footer.html')
        .then(res => res.text())
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

    fetch('components/floating-nav.html')
        .then(res => res.text())
        .then(data => {
            const floatingNavPlaceholder = document.getElementById('floating-nav-placeholder');
            if (!floatingNavPlaceholder) return;
            floatingNavPlaceholder.innerHTML = data;
        })
        .catch(err => console.error("Floating nav fetch error:", err));

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
