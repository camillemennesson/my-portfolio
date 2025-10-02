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
    }
  });
