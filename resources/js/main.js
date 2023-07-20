


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