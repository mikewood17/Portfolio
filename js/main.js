// ====================================================
// Main Javascript
// ====================================================


$('.slides').slick({
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3
});
// hamburger slideout
    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');

    menu_btn.addEventListener('click', function() {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });

    mobile_menu.addEventListener('click', function(){
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });

// Hide menu if clicked outside the toggler or nav

$(document).on('mouseup', function(e) {
    //remove active class if clicked outside nav
    if(mobile_menu.is(e.target) && mobile_menu.hasAttribute(e.target).length === 0){
        mobile_menu.removeClass('active');
        menu_btn.removeClass('active');
    }
})

//     hamMenu2.addEventListener("click",() =>
// {
//     if(
//     hamMenu2.classList.toggle("active"))
//     {
//         openNav();
//         {document.getElementByClass(".mobile-nav").style.display = "block"};
//     }

//     else
//     {
//         closeNav();
//         {document.getElementByClass(".mobile-nav").style.display = "none"}
//     }
// });


// form validation

const form = document.getElementById('form');
const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const nameRegex = /[^0-9]/;
const email = document.getElementById('email');
// const emailRegex = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
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

    // check if empty field
    if(firstNameValue === '') {
        // show error

        //add error class
        setErrorFor(firstName, 'first name cannot be blank.');
    } else {
        // add success
        setSuccessFor(firstName);
    }
        // check if contains special characters 
    if(firstNameValue.match(nameRegex)){
        // add error class
        setErrorFor(firstName, 'First name cannot contain any special characters');
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
    contactInput.className = 'contactInput error'
}

function setSuccessFor(input) {
    const contactInput = input.parentElement;
    // add success icon and border
    contactInput.className = 'contactInput success'
}
