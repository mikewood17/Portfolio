
// Main Javascript


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

  $('.carousel').slick({
    arrows: false,
    slidesToShow: 1,
    dots: true,
    variableWidth: true,
    centerMode: true,
    centerPadding: '50px',
    infinite: true,
    speed: 500,
    cssEase: 'linear'
  });