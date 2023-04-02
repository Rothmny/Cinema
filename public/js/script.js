const container_singup = document.querySelector(".container_singup");
const signUpBtn = document.querySelector(".green-bg button");

signUpBtn.addEventListener("click", () => {
  container_singup.classList.toggle("change");
});
