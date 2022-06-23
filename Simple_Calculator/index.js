"use strict";

var result = document.getElementById('result');
var button = document.querySelector('button');

button.addEventListener('click', function(e){
    var num1 = document.getElementById('first_number').value;
    var num2 = document.getElementById('second_number').value;
    var operator = document.getElementById('operators').value;
    let temp;
    console.log(Number(num1) + Number(num2));
    console.log(num1);
    console.log(num2);
    if(operator == 'plus')
        temp = Number(num1) + Number(num2);
    if(operator == 'minus')
        temp = Number(num1) - Number(num2);
    if(operator == 'multiply')
        temp = Number(num1) * Number(num2);
    if(operator == 'divide')
        temp = Number(num1) / Number(num2);

    result.insertAdjacentHTML('beforeend', temp);
});
