const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const sidebar = document.getElementById("sidebar");
const main = document.getElementById("main");

menuBtn.onclick = function () {
    if (window.innerWidth <= 768) {
        sidebar.classList.toggle("show");
    } else {
        sidebar.classList.toggle("close");
        main.classList.toggle("expand");

        if (sidebar.classList.contains("close")) {
            const productMenu = document.getElementById("productMenu");

            if (productMenu) {
                productMenu.classList.remove("show");
            }
        }
    }
};

closeBtn.onclick = function () {
    sidebar.classList.remove("show");
};

window.onresize = function () {
    if (window.innerWidth > 768) {
        sidebar.classList.remove("show");
    }
};

const themeBtn = document.getElementById("themeBtn");
const themeIcon = document.getElementById("themeIcon");

themeBtn.onclick = function () {

    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {

        themeIcon.classList.remove("fa-moon");
        themeIcon.classList.add("fa-sun");

        localStorage.setItem("theme", "dark");

    } else {

        themeIcon.classList.remove("fa-sun");
        themeIcon.classList.add("fa-moon");

        localStorage.setItem("theme", "light");
    }
};


/* Restore saved theme */

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
    document.body.classList.add("dark-mode");

    themeIcon.classList.remove("fa-moon");
    themeIcon.classList.add("fa-sun");
}
