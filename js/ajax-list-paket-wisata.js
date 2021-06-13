let keyword = document.getElementById("search");
keyword.addEventListener("keyup", function () {
  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../ajax/list-paket-wisata-search.php?keyword=" + keyword.value,
    true
  );
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("wrapper-search").innerHTML = xhttp.responseText;
    }
  };
});
console.log("wkwkw");
