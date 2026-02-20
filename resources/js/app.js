import "./bootstrap";

window.themeSwitcher = function () {
    return {
        dark: document.documentElement.classList.contains("dark"),

        toggle() {
            this.dark = !this.dark;

            document.documentElement.classList.toggle("dark", this.dark);

            localStorage.setItem("theme", this.dark ? "dark" : "light");
        },
    };
};

const batmanIcon = `
<svg viewBox="0 0 24 24" class="w-5 h-5 text-neutral-200">
<path fill="currentColor"
d="M3 14c2-3 4-4 6-4l3-3 3 3c2 0 4 1 6 4
-2-1-4-1-6 0l-3-2-3 2c-2-1-4-1-6 0z"/>
</svg>`;

const supermanIcon = `
<svg viewBox="0 0 24 24" class="w-5 h-5 text-red-600">
<path fill="currentColor"
d="M12 2l7 4v6c0 5-3.5 8-7 10
-3.5-2-7-5-7-10V6l7-4z"/>
</svg>`;

const html = document.documentElement;
const toggleBtn = document.getElementById("theme-toggle");
const icon = document.getElementById("theme-icon");

function applyTheme() {
    icon.innerHTML = html.classList.contains("dark")
        ? batmanIcon
        : supermanIcon;
}

toggleBtn?.addEventListener("click", () => {
    html.classList.toggle("dark");

    localStorage.theme = html.classList.contains("dark") ? "dark" : "light";

    applyTheme();
});

applyTheme();