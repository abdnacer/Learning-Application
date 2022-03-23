const formEl = document.getElementById('form')
const emailEl = document.getElementById('email')
const passwordEl = document.getElementById('password')
const errorEmail = document.querySelector('.errorEmail')
const errorPassword = document.querySelector('.errorPassword')

formEl.addEventListener('submit', (e) => {
  let regexEmail =  /^[a-zA-Z0-9_]{4,}@[a-zA-Z]{4,10}[.]{1}[a-z]{2,4}$/;
  if(!regexEmail.test(emailEl.value)){
    e.preventDefault()
    errorEmail.textContent = "Email empty";
  }

  let regexPassword = /^[a-z0-9A-Z]{6,20}$/
  if(passwordEl.value == ''){
    e.preventDefault()
    errorPassword.textContent = "Password empty";
  }else if(!regexPassword.test(passwordEl.value)){
    e.preventDefault()
    errorPassword.textContent = "Password must contain a letter between a-z and 0-9";
  }
})