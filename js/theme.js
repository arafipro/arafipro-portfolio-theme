const scroll = document.getElementById("scroll");
const header = document.getElementById("header_main");
const menuBtn = document.getElementById("menu_icon");
const closeBtn = document.getElementById("close_icon");
const navMenu = document.getElementById("nav_menu");
const scrollupBtn = document.getElementById("scrollup");

const obs = new IntersectionObserver(
  (entries) => {
    // ヘッダーメニューの固定
    header.classList.toggle("sticky", !entries[0].isIntersecting);
    // スクロールアップボタンの表示
    scrollupBtn.classList.toggle("active", !entries[0].isIntersecting);
  },
  // { rootMargin: "1000px 0px 0px 0px" }
);
obs.observe(scroll);

menuBtn.addEventListener("click", () => {
  navMenu.classList.add("active");
  menuBtn.style.display = "none";
  closeBtn.style.display = "block";
});

const navLink = document.querySelectorAll(".nav_link");

function linkAction() {
  navMenu.classList.remove("active");
  menuBtn.style.display = "block";
  closeBtn.style.display = "none";
}

closeBtn.addEventListener("click", linkAction);

navLink.forEach((n) => {
  n.addEventListener("click", linkAction);
});
