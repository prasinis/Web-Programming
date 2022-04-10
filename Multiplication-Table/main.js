"use strict";

let tries = 0;
let success = 0;
const numbers = [2,3,4,5,6,7,8,9] //*Οι αριθμοί για τους οποίους θα δοκιμάσω τη προπαίδεια.

let choice = prompt('Για ποιον αριθμό θέλεις να δοκιμάσεις;')

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
        if(numbers[i] * choice == document.querySelector('#answer').value){ //#answer=χρησιμοποιώντας το id του answer.
             h4.innerText = 'Συγχαρητήρια!'
             success++;
             i++;
        } else{
            h4.innerText = 'Δοκίμασε ξανά..'
        }
        tries++;
        document.querySelector('h2').innerText = `Σκόρ: ${success} στις ${tries} προσπάθειες`
        if(i < numbers.length) ask();
    })
}