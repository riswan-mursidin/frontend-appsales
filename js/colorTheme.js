// warna THEME
const body = document.querySelector("body");
const button1 = document.querySelector("#red");
const button2 = document.querySelector("#blue");
const button3 = document.querySelector("#green");
const button4 = document.querySelector("#orange");
const button5 = document.querySelector("#pink");
const button6 = document.querySelector("#default");
const editcolor = document.querySelector("#control");

function fungsi() {
  if (document.getElementById("control").className == "editwarna") {
    document.getElementById("control").className = "editwarna-open";
  } else {
    document.getElementById("control").className = "editwarna";
  }
}

button1.addEventListener("click", function () {
  body.dataset.colorMode = "red";
});
button2.addEventListener("click", function () {
  body.dataset.colorMode = "blue";
});
button3.addEventListener("click", function () {
  body.dataset.colorMode = "green";
});
button4.addEventListener("click", function () {
  body.dataset.colorMode = "orange";
});
button5.addEventListener("click", function () {
  body.dataset.colorMode = "pink";
});
button6.addEventListener("click", function () {
  body.dataset.colorMode = "default";
});
