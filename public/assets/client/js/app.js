const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function check(src) {
  var x = document.querySelector('.form-student');
  var y = document.querySelector('.form-teacher');
  if(src.value == "teacher"){
    y.style.display = "block";
    x.style.display = "none";
  }
  else{
    y.style.display = "none";
    x.style.display = "block";
  }
}