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
