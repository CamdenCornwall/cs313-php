function clickButt() {
    alert("Clicked!");
}

function changeColor() {
    var color = document.getElementById('colorInput');
    var divOne = document.getElementById('div1');
    var colorV = color.value;
    divOne.style.backgroundColor = colorV;
}