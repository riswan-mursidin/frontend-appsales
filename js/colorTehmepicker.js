const warnaUtama = document.querySelector("#warnaUtama");
const warnaHeader = document.querySelector("#warnaHeader");

warnaUtama.addEventListener("change", function () {
  document.documentElement.style.setProperty("--warna-utama", this.value);
});

warnaHeader.addEventListener("change", function () {
  document.documentElement.style.setProperty("--warna-header", this.value);
});
