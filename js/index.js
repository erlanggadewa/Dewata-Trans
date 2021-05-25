const showSidebar = document.querySelector(".show-sidebar");
const sidebar = document.querySelector(".wrapper-sidebar");
const closeSidebar = document.querySelector(".close-sidebar");
showSidebar.addEventListener("click", function () {
  sidebar.classList.add("d-block");
});
closeSidebar.addEventListener("click", function () {
  sidebar.classList.remove("d-block");
});

const dashboard = document.querySelector(".fa-house-user");
const workspace = document.querySelector(".workspace");

const navbar = document.querySelector("navbar.navbar");
console.log(navbar);
navbar.addEventListener("click", (e) => {
  console.log(e.target);
});
