const showSidebar = document.querySelector(".show-sidebar");
const sidebar = document.querySelector(".wrapper-sidebar");
const closeSidebar = document.querySelector(".close-sidebar");
showSidebar.addEventListener("click", function () {
  sidebar.classList.add("d-block");
});
closeSidebar.addEventListener("click", function () {
  sidebar.classList.remove("d-block");
});

const groupSupir = document.querySelectorAll(".group-supir");
const toggleSupir = document.querySelector(".toggle-supir");
toggleSupir.addEventListener("click", function () {
  groupSupir[0].classList.toggle("d-none");
  groupSupir[1].classList.toggle("d-none");
});
console.log(groupSupir);
console.log(toggleSupir);
