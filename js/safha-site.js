(function () {
    "use strict";

    const header = document.getElementById("site-header");
    const nav = document.getElementById("site-nav");
    const navToggle = document.querySelector(".nav-toggle");

    function closeNavigation() {
        nav.classList.remove("is-open");
        document.body.classList.remove("nav-open");
        navToggle.setAttribute("aria-expanded", "false");
        navToggle.setAttribute("aria-label", "Open navigation");
        navToggle.innerHTML = '<i class="fas fa-bars" aria-hidden="true"></i>';
    }

    navToggle.addEventListener("click", function () {
        const isOpen = nav.classList.toggle("is-open");
        document.body.classList.toggle("nav-open", isOpen);
        navToggle.setAttribute("aria-expanded", String(isOpen));
        navToggle.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
        navToggle.innerHTML = isOpen
            ? '<i class="fas fa-times" aria-hidden="true"></i>'
            : '<i class="fas fa-bars" aria-hidden="true"></i>';
    });

    nav.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", closeNavigation);
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 900) {
            closeNavigation();
        }
    });

    window.addEventListener("scroll", function () {
        header.classList.toggle("is-scrolled", window.scrollY > 12);
    }, { passive: true });

    const tabs = Array.from(document.querySelectorAll("[data-tab]"));
    const panels = Array.from(document.querySelectorAll("[data-panel]"));

    function activateTab(target) {
        tabs.forEach(function (tab) {
            const active = tab.dataset.tab === target;
            tab.classList.toggle("is-active", active);
            tab.setAttribute("aria-selected", String(active));
            tab.tabIndex = active ? 0 : -1;
        });

        panels.forEach(function (panel) {
            panel.hidden = panel.dataset.panel !== target;
        });
    }

    tabs.forEach(function (tab, index) {
        tab.addEventListener("click", function () {
            activateTab(tab.dataset.tab);
        });

        tab.addEventListener("keydown", function (event) {
            if (event.key !== "ArrowRight" && event.key !== "ArrowLeft") {
                return;
            }

            event.preventDefault();
            const direction = event.key === "ArrowRight" ? 1 : -1;
            const nextIndex = (index + direction + tabs.length) % tabs.length;
            activateTab(tabs[nextIndex].dataset.tab);
            tabs[nextIndex].focus();
        });
    });

    const demoForm = document.getElementById("demo-form");
    const formNote = document.getElementById("form-note");

    demoForm.addEventListener("submit", function (event) {
        event.preventDefault();

        if (!demoForm.reportValidity()) {
            return;
        }

        const data = new FormData(demoForm);
        const name = data.get("name");
        const email = data.get("email");
        const property = data.get("property");
        const phone = data.get("phone") || "Not provided";
        const rooms = data.get("rooms");
        const message = data.get("message") || "I would like to learn how SAFHA can support our hotel operations.";
        const subject = "SAFHA demo request - " + property;
        const body = [
            "Hello SAFHA team,",
            "",
            "I would like to request a product demonstration.",
            "",
            "Name: " + name,
            "Work email: " + email,
            "Hotel/company: " + property,
            "Phone: " + phone,
            "Approximate room count: " + rooms,
            "",
            "Priority workflows:",
            message,
            "",
            "Thank you."
        ].join("\n");

        formNote.textContent = "Your email app is opening with the request ready to send.";
        window.location.href = "mailto:icisystemng@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
    });

    document.getElementById("current-year").textContent = new Date().getFullYear();
})();
