'use strict;'

//First
console.log('1η Άσκηση');
function power(x)
{
    for(let i=1; i<=10; i++)
        console.log(`${i}η δύναμη του ${x}: ${x**i}`);
}
power(2);

//Second
console.log('2η Άσκηση');
function max(a, b, c)
{
    let max = a;
    if(a<b)
        max=b;
    if(a<c)
        max=c;
    console.log(`Κλήση συνάρτησης με ορίσματα: ${a},${b},${c}`);
    return max;
}
console.log(max(10,14,9));
console.log(max('aa','ba','ca'));

//Third
console.log('3η Άσκηση');
function third(d,e)
{
    console.log(`Κλήση συνάρτησης με ορίσματα: ${d},${e}`);
    if(d%1==0 && e%1==0 && d>0 && e>0)
        console.log(d**e);
    else
        console.log(undefined);
}

third(3,3);
third(3.2,3);
third(-3,3);
third('aa','bb');