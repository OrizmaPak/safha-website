(function () {
    "use strict";

    const header = document.getElementById("site-header");
    const nav = document.getElementById("site-nav");
    const navToggle = document.querySelector(".nav-toggle");
    const motionPreference = window.matchMedia("(prefers-reduced-motion: reduce)");

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
            const active = panel.dataset.panel === target;
            panel.hidden = !active;

            if (active && !motionPreference.matches) {
                panel.classList.remove("is-switching");
                void panel.offsetWidth;
                panel.classList.add("is-switching");
            }
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

    function setupScrollMotion() {
        if (motionPreference.matches || !("IntersectionObserver" in window)) {
            return;
        }

        const revealSets = [
            { selector: ".proof-grid > *", type: "up", step: 70 },
            { selector: ".section-heading", type: "up", step: 0 },
            { selector: ".outcome-grid > *", type: "up", step: 90 },
            { selector: ".operation-tabs", type: "up", step: 0 },
            { selector: ".operation-panel:not([hidden]) .operation-copy", type: "left", step: 0 },
            { selector: ".operation-panel:not([hidden]) .product-shot", type: "visual", step: 0 },
            { selector: ".workflow > *", type: "up", step: 70 },
            { selector: ".capability-grid > *", type: "up", step: 55 },
            { selector: ".control-copy", type: "left", step: 0 },
            { selector: ".control-list > *", type: "up", step: 80 },
            { selector: ".control-shot", type: "visual", step: 0 },
            { selector: ".reporting-visual", type: "visual", step: 0 },
            { selector: ".reporting-copy", type: "right", step: 0 },
            { selector: ".report-list > *", type: "up", step: 70 },
            { selector: ".faq-intro", type: "left", step: 0 },
            { selector: ".faq-list", type: "right", step: 0 },
            { selector: ".faq-list > *", type: "up", step: 60 },
            { selector: ".demo-copy", type: "left", step: 0 },
            { selector: ".demo-form", type: "right", step: 0 },
            { selector: ".footer-main > *", type: "up", step: 70 },
            { selector: ".footer-bottom > *", type: "up", step: 70 }
        ];
        const revealElements = [];

        revealSets.forEach(function (set) {
            document.querySelectorAll(set.selector).forEach(function (element, index) {
                if (element.hasAttribute("data-reveal")) {
                    return;
                }

                element.setAttribute("data-reveal", set.type);
                element.style.setProperty("--reveal-delay", Math.min(index * set.step, 360) + "ms");
                revealElements.push(element);
            });
        });

        document.documentElement.classList.add("motion-enabled");

        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add("is-revealed");
                entry.target.addEventListener("transitionend", function (event) {
                    if (event.propertyName === "opacity") {
                        entry.target.classList.add("reveal-settled");
                    }
                }, { once: true });
                revealObserver.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px"
        });

        revealElements.forEach(function (element) {
            revealObserver.observe(element);
        });

        function handleMotionPreferenceChange(event) {
            if (!event.matches) {
                return;
            }

            document.documentElement.classList.remove("motion-enabled");
            revealElements.forEach(function (element) {
                revealObserver.unobserve(element);
                element.classList.add("is-revealed");
            });
        }

        if (typeof motionPreference.addEventListener === "function") {
            motionPreference.addEventListener("change", handleMotionPreferenceChange);
        } else if (typeof motionPreference.addListener === "function") {
            motionPreference.addListener(handleMotionPreferenceChange);
        }
    }

    setupScrollMotion();

    const demoForm = document.getElementById("demo-form");
    const formNote = document.getElementById("form-note");

    function setFormStatus(type, message) {
        formNote.textContent = message;
        formNote.dataset.status = type;
    }

    demoForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        if (!demoForm.reportValidity()) {
            return;
        }

        const submitButton = demoForm.querySelector("[type='submit']");
        const formData = new FormData(demoForm);
        const data = new FormData();

        data.set("lastname", formData.get("lastname"));
        data.set("firstname", formData.get("firstname"));
        data.set("email", formData.get("email"));
        data.set("message", formData.get("message"));

        submitButton.disabled = true;
        demoForm.classList.add("is-submitting");
        setFormStatus("pending", "Submitting your request...");

        try {
            const response = await fetch(demoForm.action, {
                method: "POST",
                body: data,
                headers: {
                    "Accept": "application/json, text/plain, */*"
                },
                credentials: "same-origin"
            });

            if (!response.ok) {
                throw new Error("Request failed with status " + response.status);
            }

            demoForm.reset();
            setFormStatus("success", "Thank you. Your request has been sent and the SAFHA team will follow up.");
        } catch (error) {
            setFormStatus("error", "We could not submit the form. Please email icisystemng@gmail.com or try again.");
        } finally {
            submitButton.disabled = false;
            demoForm.classList.remove("is-submitting");
        }
    });

    document.getElementById("current-year").textContent = new Date().getFullYear();
})();
