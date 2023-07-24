
// funzione incrementa numeri 

let firstSpan = document.querySelector('#first-span');

let secondSpan = document.querySelector('#second-span');

let thirdSpan = document.querySelector('#third-span');


function createInterval(finalNumber, element){

    let counter = 0;

    let interval = setInterval( ()=>{

        counter+= Math.ceil(finalNumber / 100); 

        if(counter < finalNumber){

            counter ++

            element.innerHTML = counter;

        } else {

            element.innerHTML = finalNumber;
            clearInterval(interval);

        }


    }, 10 )

}

createInterval(24, firstSpan);
createInterval(900000, secondSpan);
createInterval(450000, thirdSpan);


// SECONDO CAROSELLO COLLAB

  $(document).ready(function() {
    $('.slide:gt(0)').hide(); // Nascondi tutti gli slide tranne il primo

    setInterval(function() {
      $('.slide:first-child').fadeOut(1000)
         .next('.slide').fadeIn(1000)
         .end().appendTo('.carosello');
    }, 3000);
  });


// SCROLL NAVBAR

// let mainNav = document.querySelector('#mainNav');
// let containerNav = document.querySelector('#containerNav');

// window.addEventListener('scroll', ()=>{

//     if(window.scrollY > 0){

//         mainNav.style.backgroundColor = '#040017';
//         containerNav.style.backgroundColor = '#040017';

//         mainNav.style.height = '80px';
       
//     } else {

//         mainNav.style.backgroundColor = 'trasparent';
//         mainNav.style.height = '55px';
                
//         containerNav.style.backgroundColor = 'transparent';
        
//     }

   

// })






var category = 'happiness'
$.ajax({
    method: 'GET',
    url: 'https://api.api-ninjas.com/v1/quotes?category=happiness' + category,
    headers: { 'X-Api-Key': 'YOUR_API_KEY'},
    contentType: 'application/json',
    success: function(result) {
        console.log(result);
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});