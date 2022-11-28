// ====================================================
// Main Javascript
// ====================================================


$('.slides').slick({
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3
});

// window.onload = function () {

    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');

    menu_btn.addEventListener('click', function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });

// form validation
const form = document.getElementById('form');
const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const message = document.getElementById('message');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});
function checkInputs() {
    //get the values from the inputs
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();
    const subjectValue = subject.value;
    const messageValue = message.value;

    if(firstNameValue === '') {
        // show error

        //add error class
        setErrorFor(firstName, 'first name cannot be blank.');
    } else {
        // add success
        setSuccessFor(firstName);
    }
}
function setErrorFor(input, message) {
    const contactInput = input.parentElement;
    const small = contactInput.querySelector('small');

    // add error message inside small tag
    small.innerText = message;

    // add error class 
    contactInput.classList.add("error");
}

function setSuccessFor(input) {
    const contactInput = input.parentElement;
    // add success icon and border
    contactInput.classList.add("success");
}