(function () {
  const SUPPORTED = ["fr", "en"];
  const DEFAULT = "fr";
  const cache = {};
  let dict = null;
  let current = DEFAULT;

  // Saved choice first, then browser language, then French
  function detect() {
    let saved = null;
    try { saved = localStorage.getItem("lang"); } catch (e) {}
    if (SUPPORTED.includes(saved)) return saved;
    return (navigator.language || "").toLowerCase().startsWith("en") ? "en" : DEFAULT;
  }

  async function load(lang) {
    if (!cache[lang]) {
      const res = await fetch("lang/" + lang + ".json");
      if (!res.ok) throw new Error("Cannot load lang/" + lang + ".json");
      cache[lang] = await res.json();
    }
    return cache[lang];
  }

  // Fills in every tagged element inside `root` (the whole page by default)
  function applyLanguage(root) {
    root = root || document;
    if (!dict) return;

    root.querySelectorAll("[data-i18n]").forEach(function (el) {
      const key = el.getAttribute("data-i18n");
      if (key in dict) el.textContent = dict[key];
      else console.warn("Missing translation key:", key);
    });

    root.querySelectorAll("[data-i18n-alt]").forEach(function (el) {
      const key = el.getAttribute("data-i18n-alt");
      if (key in dict) el.setAttribute("alt", dict[key]);
      else console.warn("Missing translation key:", key);
    });

    root.querySelectorAll("[data-i18n-aria]").forEach(function (el) {
      const key = el.getAttribute("data-i18n-aria");
      if (key in dict) el.setAttribute("aria-label", dict[key]);
      else console.warn("Missing translation key:", key);
    });

      root.querySelectorAll("[data-i18n-href]").forEach(function (el) {
      const key = el.getAttribute("data-i18n-href");
      if (key in dict) el.setAttribute("href", dict[key]);
      else console.warn("Missing translation key:", key);
    });

    root.querySelectorAll(".lang-switch").forEach(function (sw) {
      sw.setAttribute("data-active", current);
      sw.querySelectorAll("[data-lang]").forEach(function (b) {
        b.setAttribute("aria-pressed", String(b.getAttribute("data-lang") === current));
      });
    });

  }

  async function setLanguage(lang) {
    if (!SUPPORTED.includes(lang)) return;
    try {
      dict = await load(lang);
    } catch (err) {
      console.error(err);
      return;
    }
    current = lang;
    try { localStorage.setItem("lang", lang); } catch (e) {}
    document.documentElement.lang = lang;
    applyLanguage();
  }

  window.applyLanguage = applyLanguage;
  window.setLanguage = setLanguage;
  window.getLanguage = function () { return current; };

  document.addEventListener("click", function (e) {
    const btn = e.target.closest(".lang-switch [data-lang]");
    if (btn) setLanguage(btn.getAttribute("data-lang"));
  });

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () { setLanguage(detect()); });
  } else {
    setLanguage(detect());
  }
})();