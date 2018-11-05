var boutonMenuOpen = document.getElementById("boutonMenuOpen");
var boutonMenuClose = document.getElementById("boutonMenuClose");
var navContent = document.getElementById("navContent");
var logoMin = document.getElementById("logoMin");

function afficherMenu (e) {
  boutonMenuOpen.style.display = "none";
  logoMin.style.display = "none";
  boutonMenuClose.style.display = "inherit";
  navContent.style.display = "block";
  e.preventDefault();
}

function fermerMenu (e) {
  boutonMenuOpen.style.display = "inherit";
  logoMin.style.display = "inherit";
  boutonMenuClose.style.display = "none";
  navContent.style.display = "none";
  e.preventDefault();
}

var i = 1;
while (i<1000) {
boutonMenuOpen.addEventListener("click", afficherMenu);
boutonMenuClose.addEventListener("click", fermerMenu);
i++;
}
