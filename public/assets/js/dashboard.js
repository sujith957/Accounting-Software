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