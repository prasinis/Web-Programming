var b1 = document.getElementById('size1');
var b2 = document.getElementById('size2');
var b3 = document.getElementById('size3');

b1.onclick = function() {
    
    document.getElementById('par').style.fontSize = '10px';
}

b2.onclick = function() {
    
    document.getElementById('par').style.fontSize = '20px';
}

b3.onclick = function() {
    
    document.getElementById('par').style.fontSize = '30px';
}