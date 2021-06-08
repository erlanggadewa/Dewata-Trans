const showSidebar = document.querySelector(".show-sidebar");
const sidebar = document.querySelector(".wrapper-sidebar");
const closeSidebar = document.querySelector(".close-sidebar");
showSidebar.addEventListener("click", function () {
  sidebar.classList.add("d-block");
});
closeSidebar.addEventListener("click", function () {
  sidebar.classList.remove("d-block");
});
