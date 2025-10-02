// scripts/script.js
document.addEventListener("DOMContentLoaded", function () {
    console.log("✅ DOM fully loaded");
     window.addEventListener("scroll", () => {
  console.log("📜 Scrolling...", window.scrollY);
});


    // -------------------------------
    // ELEMENT SELECTORS
    // -------------------------------
    const mybutton = document.getElementById("btn-back-to-top");
    const toc = document.getElementById("sticky-toc");

    if (!mybutton) console.warn("⚠️ Back-to-top button not found");
    if (!toc) console.warn("⚠️ TOC not found");

    // Build TOC links + sections dynamically
    let tocLinks = [];
    let sections = [];
    if (toc) {
        tocLinks = toc.querySelectorAll("a[href^='#']");
        sections = Array.from(tocLinks)
            .map(link => {
                const id = link.getAttribute("href");
                const section = document.querySelector(id);
                if (!section) {
                    console.warn("⚠️ No section found for TOC link:", id);
                }
                return section;
            })
            .filter(Boolean);
    }

    // -------------------------------
    // SCROLL HANDLER
    // -------------------------------
    const handleScroll = () => {
        const scrollPosition = window.scrollY;
        console.log("📜 Scroll position:", scrollPosition);

        // --- Back-to-top button ---
        if (mybutton && document.body.id !== "home") {
            mybutton.style.display = scrollPosition > 20 ? "block" : "none";
        } else if (mybutton) {
            mybutton.style.display = "none";
        }

        // --- Highlight current section in TOC ---
        if (sections.length && tocLinks.length) {
            let currentSection = sections[0];
            for (let i = sections.length - 1; i >= 0; i--) {
                const section = sections[i];
                if (scrollPosition >= section.offsetTop - 100) {
                    currentSection = section;
                    break;
                }
            }
            console.log("⭐ Active section:", currentSection ? currentSection.id : "none");

            tocLinks.forEach(link => {
                const isActive = currentSection && link.getAttribute("href") === "#" + currentSection.id;
                link.classList.toggle("active", isActive);
                if (isActive) {
                    console.log("🔗 Highlighted TOC link:", link.getAttribute("href"));
                }
            });
        }
    };

    // Attach scroll listener (WINDOW ONLY)
    window.addEventListener("scroll", handleScroll);

    // Run once on load
    handleScroll();

    // -------------------------------
    // BACK-TO-TOP BUTTON CLICK
    // -------------------------------
    if (mybutton) {
        mybutton.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // -------------------------------
    // NAVBAR & FOOTER FETCH
    // -------------------------------
    const navbarType = document.getElementById("navbar-placeholder")?.getAttribute("data-navbar-type");
    const footerType = document.getElementById("footer-placeholder")?.getAttribute("data-footer-type");

    fetch("components/navbar.html?v=" + Date.now())
        .then(res => res.text())
        .then(data => {
            const tempDiv = document.createElement("div");
            tempDiv.innerHTML = data;
            const navbarWhite = tempDiv.querySelector("#navbar-white");
            const navbarBlack = tempDiv.querySelector("#navbar-black");
            const navbarPlaceholder = document.getElementById("navbar-placeholder");
            if (!navbarPlaceholder) return;
            if (navbarType === "black") navbarPlaceholder.appendChild(navbarBlack);
            else navbarPlaceholder.appendChild(navbarWhite);
        })
        .catch(err => console.error("Navbar fetch error:", err));

    fetch("components/footer.html")
        .then(res => res.text())
        .then(data => {
            const tempDiv = document.createElement("div");
            tempDiv.innerHTML = data;
            const footerWhite = tempDiv.querySelector("#footer-white");
            const footerBlack = tempDiv.querySelector("#footer-black");
            const footerPlaceholder = document.getElementById("footer-placeholder");
            if (!footerPlaceholder) return;
            if (footerType === "black") footerPlaceholder.appendChild(footerBlack);
            else footerPlaceholder.appendChild(footerWhite);
        })
        .catch(err => console.error("Footer fetch error:", err));

    fetch("components/floating-nav.html")
        .then(res => res.text())
        .then(data => {
            const floatingNavPlaceholder = document.getElementById("floating-nav-placeholder");
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
