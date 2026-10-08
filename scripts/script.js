// scripts/script.js
document.addEventListener("DOMContentLoaded", function () {
    console.log("✅ DOM fully loaded");

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
            const chosen = navbarType === "black" ? navbarBlack : navbarWhite;
            if (chosen) navbarPlaceholder.appendChild(chosen);
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
            const chosen = footerType === "black" ? footerBlack : footerWhite;
            if (chosen) footerPlaceholder.appendChild(chosen);
        })
        .catch(err => console.error("Footer fetch error:", err));

    // -------------------------------
    // FLOATING NAV (fetch + précédent/suivant + état actif)
    // -------------------------------
    // L'ordre ici = l'ordre de navigation entre case studies
    const projects = ["Riseup.php", "Mavoie.php", "Soliguide.php", "Catan.php"];

    function setupFloatingNav() {
        // Page courante, sans extension et sans tenir compte de la casse
        const clean = s => s.replace(/\.php$/i, "").toLowerCase();
        const current = clean(location.pathname.split("/").pop());
        const i = projects.findIndex(p => clean(p) === current);

        if (i !== -1) {
            const prev = document.getElementById("link-prev");
            const next = document.getElementById("link-next");

            if (prev && i > 0) {
                prev.href = projects[i - 1];
                prev.hidden = false;
            }
            if (next && i < projects.length - 1) {
                next.href = projects[i + 1];
                next.hidden = false;
            }
        }

        // État actif (doit tourner APRÈS l'injection du menu)
        document.querySelectorAll(".nav-link").forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add("active");
                link.setAttribute("aria-current", "page");
            }
        });
    }

    fetch("components/floating-nav.html")
        .then(res => res.text())
        .then(data => {
            const floatingNavPlaceholder = document.getElementById("floating-nav-placeholder");
            if (!floatingNavPlaceholder) return;
            floatingNavPlaceholder.innerHTML = data;
            setupFloatingNav();
        })
        .catch(err => console.error("Floating nav fetch error:", err));

    // -------------------------------
    // RISEUP .step CLICK HANDLER
    // -------------------------------
    const steps = document.querySelectorAll("#research .step");
    const images = [
        document.getElementById("image-1"),
        document.getElementById("image-2"),
        document.getElementById("image-3")
    ];

    steps.forEach((step, index) => {
        step.addEventListener("click", () => {
            // Hide all images
            images.forEach(img => { if (img) img.style.display = "none"; });
            // Show the clicked step's image
            if (images[index]) images[index].style.display = "block";

            // Remove active class from all steps
            steps.forEach(s => s.classList.remove("active"));
            // Add active class to clicked step
            step.classList.add("active");
        });
    });

    // Set first step active by default
    if (steps.length > 0) {
        steps[0].classList.add("active");
    }

    // -------------------------------
    // FULLSCREEN IMAGE VIEWER FOR SOLUTION IMAGES
    // -------------------------------
    const solutionImages = document.querySelectorAll(".solution-image");
    solutionImages.forEach(img => {
        img.style.cursor = "pointer";
        img.addEventListener("click", () => {
            // Create overlay
            const overlay = document.createElement("div");
            overlay.style.position = "fixed";
            overlay.style.top = 0;
            overlay.style.left = 0;
            overlay.style.width = "100vw";
            overlay.style.height = "100vh";
            overlay.style.backgroundColor = "rgba(0,0,0,0.8)";
            overlay.style.display = "flex";
            overlay.style.justifyContent = "center";
            overlay.style.alignItems = "center";
            overlay.style.zIndex = 10000;
            overlay.style.cursor = "zoom-out";
            overlay.style.flexDirection = "column";

            // Create fullscreen image
            const fullImg = document.createElement("img");
            fullImg.src = img.src;
            fullImg.style.maxWidth = "90%";
            fullImg.style.maxHeight = "90%";
            fullImg.style.borderRadius = "8px";
            fullImg.style.marginBottom = "1rem";

            // Create controls container
            const controls = document.createElement("div");
            controls.style.position = "relative";
            controls.style.width = "100%";
            controls.style.display = "flex";
            controls.style.justifyContent = "flex-end";
            controls.style.marginBottom = "-2rem";

            // Create close icon
            const closeIcon = document.createElement("i");
            closeIcon.className = "bi bi-x";
            closeIcon.style.fontSize = "2rem";
            closeIcon.style.color = "white";
            closeIcon.style.cursor = "pointer";
            closeIcon.title = "Close";
            closeIcon.style.position = "absolute";
            closeIcon.style.top = "-650px";
            closeIcon.style.right = "20px";

            overlay.appendChild(fullImg);
            overlay.appendChild(controls);
            controls.appendChild(closeIcon);
            document.body.appendChild(overlay);

            // Close overlay on close icon click
            closeIcon.addEventListener("click", () => {
                document.body.removeChild(overlay);
            });

            // Also close overlay on clicking outside image and controls
            overlay.addEventListener("click", (e) => {
                if (e.target === overlay) {
                    document.body.removeChild(overlay);
                }
            });
        });
    });
});