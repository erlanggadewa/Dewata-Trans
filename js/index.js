const showSidebar = document.querySelector(".show-sidebar");
const sidebar = document.querySelector(".wrapper-sidebar");
const closeSidebar = document.querySelector(".close-sidebar");
showSidebar.addEventListener("click", function () {
  sidebar.classList.add("d-block");
});
closeSidebar.addEventListener("click", function () {
  sidebar.classList.remove("d-block");
});

const navbar = document.querySelector("navbar.navbar");

navbar.addEventListener("click", (e) => {
  const workspace = document.querySelector(".workspace");
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      workspace.innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", `${e.target.dataset.ref}`, true);
  xhttp.send();
});
