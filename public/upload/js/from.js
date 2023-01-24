
let form = document.getElementById('form');
let username = document.getElementById('pseudo');
let email = document.getElementById('email');
let password = document.getElementById('password');
let repassword = document.getElementById('repassword');

// Event Submit form Register
form.addEventListener('submit', (event)=>{
    invalid(event);
})
// ERROR Define Function
const setError = (element, message) => {
    const inputP = element.parentElement;
    const error = inputP.querySelector('.error');
    error.classList.add('errorc');
    error.classList.remove('success');
    error.innerHTML = message;
    element.classList.add('errorinput');
}

//Success Define Function 
const setSuccess = ( element, message)=>{
    const inputP = element.parentElement;
    const success = inputP.querySelector('.error');

    element.classList.remove('errorinput');
    success.innerHTML = message;
    success.classList.remove('errorc');
    success.classList.add('success')

}
// Valide Email Function
const validemail = (element)=> {
    let expregx = new RegExp('^[A-Za-z0-9._-]+[@]{1}[a-z]+[.]{1}[a-z]{3,5}$','g');
    let resultregx= expregx.test(element);
    if(resultregx== true){
        return true;
    }else{
        return false;
    }
}
// Valide Password
const validepwd = (element)=>{
    let expregx = new RegExp('^[A-Za-z0-9-_.@]+$', 'g');
    let resultregx = expregx.test(element);
    if(resultregx == true){
        return true;
    }else{
        return false;
    }
}

 //function valide Form input 
const invalid = (event)=>{
    if (username.value === '') {
        event.preventDefault();
        setError(username, 'Required filed !');
    }else{
        setSuccess(username, 'Success');
    }
    if (email.value === '' ) {
        event.preventDefault();
        setError(email, 'Required felds!');
        console.log(validemail(email.value));
    }else if(validemail(email.value)==false){
        event.preventDefault();
        setError(email, 'The email shod by like this form azA@gmail.com!');
    }else if(validemail(email.value)==true){
        setSuccess(email, 'Success');
    }
    
    if (password.value === '' || password.value.length < 5 || validepwd(password.value)==false) {
        event.preventDefault();
        setError(password, 'Required !');
    }else{
        setSuccess(password, 'Success');
    }

    if (repassword.value === '' || repassword.value.length != password.value.length) {
        event.preventDefault();
        setError(repassword, 'Required !');
    }else{
        setSuccess(repassword, 'Success');
    }
}

// Event Submit form Register
let formlogin = document.getElementById('connect');
let emailogin = document.getElementById('emaillogin');
let passwordlogin = document.getElementById('passwordlogin');

formlogin.addEventListener('submit', (event)=>{
    invalidlogin(event);
})

const invalidlogin = (event)=>{
    if(emailogin.value === ''){
        event.preventDefault();
        setError(emailogin, 'Required filed !');
    }else if(validemail(emailogin.value) == false){
        event.preventDefault();
        setError(emailogin, 'Please enter a valid email address');
    }
    if (passwordlogin.value === '') {
        event.preventDefault();
        setError(passwordlogin, 'Required filed !');
    }else if(validepwd(passwordlogin.value) == false || passwordlogin.value.length < 5){
        event.preventDefault();
        setError(passwordlogin, 'Your password is incorrect. Please try again');
    }
    if (validepwd(passwordlogin.value) === true && passwordlogin.value.length > 5 && validemail(emailogin.value) === true) {
        formlogin.submit();
    }
}