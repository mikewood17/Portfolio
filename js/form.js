
// form validation

const form = document.getElementById('form');
const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');
const fadeBackground = document.querySelector('.fade');
const popup = document.querySelector('.success-popup');
const body = document.getElementsByTagName('body');

form.addEventListener('click', (e) => {
    var test = checkInputs();
    console.log('test', test);
    if (!test) {
        e.preventDefault();
    } else {
        console.log('success')
        fadeBackground.style.display = 'flex';
        popup.style.display = 'block';
        body[0].style.overflow = 'hidden';
    }
});

// close popup

const close = document.getElementById('close')

close.addEventListener('click', function(){
    fadeBackground.style.display = 'none';
    popup.style.display = 'none';
    body[0].style.overflow = 'scroll';
})

// check inputs functions

function checkInputs() {
    //get the values from the inputs
    // trim to remove whitespace
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();
    const subjectValue = subject.value;
    const messageValue = message.value;

    var errorCount = 0;
    // ==== First Name validation ====

    // check if empty field
    if(firstNameValue != undefined && firstNameValue === '') {
        //add error class
        setErrorFor(firstName, 'First name cannot be blank.');
        errorCount++;
    // check if contains special characters
    } else if  (!isValidName(firstNameValue)){
        // add error class
        setErrorFor(firstName, 'First name cannot contain any special characters');
        errorCount++;
    } else {
        // add success
        setSuccessFor(firstName);
    }

    // ==== Last Name validation ====

     // check if empty field
     if(lastNameValue != undefined && lastNameValue === '') {
        //add error class
        setErrorFor(lastName, 'Last name cannot be blank.');
        errorCount++;
    // check if contains special characters
    } else if  (!isValidName(lastNameValue)){
        // add error class
        setErrorFor(lastName, 'Last name cannot contain any special characters');
        errorCount++;
    } else {
        // add success
        setSuccessFor(lastName);
    }

    // ==== Email Validation ====

    if(emailValue != undefined && emailValue === '') {
        setErrorFor(email, 'Email cannot be blank!');
        errorCount++;
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email!');
        errorCount++;
    } else {
        setSuccessFor(email);
    }

    // ==== Subject Validation ====

    if(subjectValue != undefined && subjectValue === '') {
        setErrorFor(subject, 'Subject cannot be blank');
        errorCount++;
    } else {
        setSuccessFor(subject);
    }

    // ==== Message Validation ====

    if(messageValue != undefined && messageValue === '') {
        setErrorFor(message, 'Message cannot be blank');
        errorCount++;
    } else {
        setSuccessFor(message);
    }

    if(errorCount != 0) {
        return false;
    } else {
        return true; 
    }
}
function setErrorFor(input, message) {
    const contactInput = input.parentElement;
    const small = contactInput.querySelector('small');

    // add error message inside small tag
    small.innerText = message;
    // remove succes class
    contactInput.classList.remove('success');
    // add error class 
    contactInput.classList.add('error');
    
}

function setSuccessFor(input) {
    const contactInput = input.parentElement;
    // remove error class
    contactInput.classList.remove('error');
    // add success classicon and border
    contactInput.classList.add('success');
    
}


function isValidName(name){
    return /^[a-zA-Z]*$/.test(name);
}
function isEmail(email){
    return /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/.test(email);

}
