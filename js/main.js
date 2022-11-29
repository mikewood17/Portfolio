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


    // ==== First Name validation ====

    // check if empty field
    if(firstNameValue != undefined && firstNameValue === '') {
        //add error class
        setErrorFor(firstName, 'First name cannot be blank.');
        console.log(firstName.value);

    // check if contains special characters
    } else if  (!isValidName(firstNameValue)){
        // add error class
        setErrorFor(firstName, 'First name cannot contain any special characters');
        
    } else {
        // add success
        setSuccessFor(firstName);
        console.log(firstName.value);
    }

    // ==== Last Name validation ====

     // check if empty field
     if(lastNameValue != undefined && lastNameValue === '') {
        //add error class
        setErrorFor(lastName, 'Last name cannot be blank.');
        console.log(lastName.value);

    // check if contains special characters
    } else if  (!isValidName(lastNameValue)){
        // add error class
        setErrorFor(lastName, 'Last name cannot contain any special characters');
        
    } else {
        // add success
        setSuccessFor(lastName);
        console.log(lastName.value);
    }

    // ==== Email Validation ====

    if(emailValue != undefined && emailValue === '') {
        setErrorFor(email, 'Email cannot be blank!');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email!');
    } else {
        setSuccessFor(email);
    }

    // ==== Subject Validation ====

    if(subjectValue != undefined && subjectValue === '') {
        setErrorFor(subject, 'Subject cannot be blank')
    } else {
        setSuccessFor(subject);
    }

    // ==== Message Validation ====

    if(messageValue != undefined && messageValue === '') {
        setErrorFor(message, 'Message cannot be blank')
    } else {
        setSuccessFor(message);
    }
}
function setErrorFor(input, message) {
    const contactInput = input.parentElement;
    const small = contactInput.querySelector('small');

    // add error message inside small tag
    small.innerText = message;

    // add error class 
    contactInput.classList.add('error');
}

function setSuccessFor(input) {
    const contactInput = input.parentElement;
    // add success classicon and border
    contactInput.classList.add('success');
}
function isValidName(firstName){
    return /[^0-9]/.test(firstName);
}
function isEmail(email){
    return /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/.test(email);

}

// Banner effect 

async function typeSentence(sentence, eleRef, delay = 100) {
    const letters = sentence.split("");
    let i = 0;
    while(i < letters.length) {
      await waitForMs(delay);
      $(eleRef).append(letters[i]);
      i++
    }
    return;
  }
  
  // wait function

  function waitForMs(ms) {
    return new Promise(resolve => setTimeout(resolve, ms))
  }

// sentance delete function

  async function deleteSentence(eleRef) {
    const sentence = $(eleRef).html();
    const letters = sentence.split("");
    let i = 0;
    while(letters.length > 0) {
      await waitForMs(100);
      letters.pop();
      $(eleRef).html(letters.join(""));
    }
  }

  // Banner write and delete function 

  $( document ).ready(async function() {
    await typeSentence("My Name is Michael Wood!", "#sentence");
    await waitForMs(2000);
    deleteSentence("#sentence");
    await waitForMs(3000)
    await typeSentence("I am a trainee web developer!", "#sentence")
    await waitForMs(2000);
    deleteSentence("#sentence");
    await waitForMs(3200)
    await typeSentence("Welcome to my webpage!!", "#sentence")
  });