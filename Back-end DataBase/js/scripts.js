const form = document.getElementById('form');
const name = document.getElementById('name');
const prenom = document.getElementById('prenom');

const email = document.getElementById('email');
const password = document.getElementById('password');
const confpassword = document.getElementById('confermepassword');

const errorName = document.querySelector('.errorName');
const errorPrenom = document.querySelector('.errorPrenom');

const errorEmail = document.querySelector('.errorEmail');
const errorPassword = document.querySelector('.errorPassword');
const errorConfPassword = document.querySelector('.errorConfPassword');

window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            // document.getElementById('sidebarToggle').classList.toggle('lefts');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

var valid = true;

form.addEventListener('submit', (e) => {

    if(name.value.trim() == ''){
        e.preventDefault();
        errorName.textContent = "Name empty";
        valid = false ;
    }

    if(prenom.value.trim() == ''){
        e.preventDefault();
        errorPrenom.textContent = "Prenom empty";
        valid = false ;
    }
    
    let regexEmail =  /^[a-zA-Z0-9_]{4,}@[a-zA-Z]{4,10}[.]{1}[a-z]{3,4}$/;
    if(email.value.trim() == ''){
        e.preventDefault();
        errorEmail.textContent = "Email empty";
        valid = false ;
    }
    else if(!regexEmail.test(email.value.trim())){
        e.preventDefault();
        errorEmail.textContent = "Email no empty sous forme example@email.com";
        valid = false ;
    }
    else{
        errorEmail.textContent = "";
    }

    let regexPassword = /^[a-z0-9A-Z]{4,20}$/
    if(!regexPassword.test(password.value.trim())){
        e.preventDefault();
        errorPassword.textContent = "Password must contain a letter between a-z and 0-9";
        valid = false ;
    }

    if(confpassword.value.trim() == '' ){
        e.preventDefault();
        errorConfPassword.textContent = "The password is blank";
        valid = false ;
    }
    else if(confpassword.value.trim() != password.value.trim()){
        e.preventDefault();
        errorConfPassword.textContent = "Password not matched";
        valid = false ;
    }


    if(valid){
        document.getElementById("check_Signup").innerHTML = '<div class="alert alert-success" role="alert">Added IS Succesfully <h3>&#128526;</h3> </div>';
        setTimeout(close_mess,3000);
    }
})

function moddalForm(){
        document.getElementById("model_parent").style.display = "block";
        document.getElementById("model_parent").style.display = "flex";
}

function close_(){
        document.getElementById("model_parent").style.display = "none"; 
}

function moddalFormCourse(){
        document.getElementById("model_parent_course").style.display = "block";
        document.getElementById("model_parent_course").style.display = "flex";
}

function close_Course(){
        document.getElementById("model_parent_course").style.display = "none"; 
}

function close_mess(){
    document.getElementById("test").innerHTML =  "";
}


