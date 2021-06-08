const groupSupir = document.querySelectorAll(".group-supir");
const toggleSupir = document.querySelector(".toggle-supir");
toggleSupir.addEventListener("click", function () {
  groupSupir[0].classList.toggle("d-none");
  groupSupir[1].classList.toggle("d-none");
});
