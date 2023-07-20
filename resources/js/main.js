


// funzione incrementa numeri 

let firstSpan = document.querySelector('#first-span');

let secondSpan = document.querySelector('#second-span');

let thirdSpan = document.querySelector('#third-span');


function createInterval(finalNumber, element){

    let counter = 0;

    let interval = setInterval( ()=>{

        counter++

        if(counter < finalNumber){

            counter ++

            element.innerHTML = counter;

        } else {

            clearInterval(interval);

        }


    }, 1 )

}

createInterval(24, firstSpan);
createInterval(900000, secondSpan);
createInterval(450000, thirdSpan);