let oldImg = document.getElementById("oldImg");
let newImg = document.getElementById("newImg");
newImg.addEventListener("change", () => {
  if (newImg.files && newImg.files[0]) {
    oldImg.src = URL.createObjectURL(newImg.files[0]);
    oldImg.style.display = "block";
  }
});
