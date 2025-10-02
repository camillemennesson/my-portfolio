scrollable.addEventListener("scroll", () => {
    const scrollPosition = wrapper ? wrapper.scrollTop : window.scrollY; // declare first
    console.log("Scroll detected! Position:", scrollPosition);

    // TOC debug
    if (toc && challengeSection) {
        toc.style.display = scrollPosition >= challengeSection.offsetTop - 50 ? 'block' : 'none';
        console.log('TOC display:', toc.style.display, 'Scroll position:', scrollPosition, 'Challenge top:', challengeSection.offsetTop);
    }

    // --- Back-to-top button ---
    if (mybutton) {
        mybutton.style.display = scrollPosition > 20 ? "block" : "none";
    }

    // --- Highlight current section ---
    if (toc && challengeSection) {
        const challengeThreshold = challengeSection.offsetTop - 50;
        toc.style.display = scrollPosition + (wrapper ? wrapper.clientHeight : window.innerHeight) * 0.25 >= challengeThreshold ? "block" : "none";

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
