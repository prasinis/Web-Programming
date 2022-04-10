"use strict";

let tries = 0;
let success = 0;
const numbers = [2,3,4,5,6,7,8,9] //*Numbers we are going to use on our multiplication table.

let choice = prompt('With what number do you want to try?')

let h3 = document.querySelector('h3');
let h4 = document.querySelector('h4');

let i = 0;

ask()

function ask(){
    h3.innerHTML = `
    ${numbers[i]} x ${choice} =
    <input type="text" id="answer" size="3">
    <button>OK<button>
    `
    document.querySelector('button').addEventListener('click', function(){
        if(numbers[i] * choice == document.querySelector('#answer').value){ //#answer = we use the id of the textfield answer.
             h4.innerText = 'Congratulations!'
             success++;
             i++;
        } else{
            h4.innerText = 'Try again..'
        }
        tries++;
        document.querySelector('h2').innerText = `Score: ${success} from ${tries} tries`
        if(i < numbers.length) ask();
    })
}
