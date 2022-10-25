let b1RougePlus = document.querySelector('#b1');
let b2RougeMoins = document.querySelector('#b2');
let b3VertPlus = document.querySelector('#b3');
let b4VertMoins = document.querySelector('#b4');
let b5BleuPlus = document.querySelector('#b5');
let b6BleuMoins = document.querySelector('#b5');
let bHazard = document.querySelector('#hazard');
let bodyStyle = document.querySelector("body");


b1RougePlus.addEventListener('click', rougePlus);
b2RougeMoins.addEventListener("click", rougeMoins);
b3VertPlus.addEventListener("click", vertPlus);
b4VertMoins.addEventListener("click", vertMoins);
b5BleuPlus.addEventListener("click", bleuPlus);
b6BleuMoins.addEventListener("click", bleuMoins);
// bHazard.addEventListener("click", hazardColor);
var currentColorForRed = 0;
var currentColorForGreen = 0;
var currentColorForBlue = 0;
var plusCombien = document.getElementById("combienDePlus").value;

function rougePlus(plusCombien) {
    let newColor = currentColorForRed + plusCombien;
    bodyStyle.style.backgroundColor = 'rgb(' + newColor + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

function rougeMoins() {
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

function vertPlus(plusCombien) {
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

function vertMoins() {
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

function bleuPlus() {
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

function bleuMoins() {
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
}

// function hazardColor() {
//     bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + randomNum(); + ', ' + randomNum(); + ', ' + randomNum(); + ' )';
// }