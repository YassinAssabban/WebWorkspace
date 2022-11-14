let b1RougePlus = document.querySelector('#b1');
let b2RougeMoins = document.querySelector('#b2');
let b3VertPlus = document.querySelector('#b3');
let b4VertMoins = document.querySelector('#b4');
let b5BleuPlus = document.querySelector('#b5');
let b6BleuMoins = document.querySelector('#b6');
let bHazard = document.querySelector('#hazard');
let bodyStyle = document.querySelector("body");
let affichRgb = document.querySelector("#affichRgb");

let currentColorForRed = 255;
let currentColorForGreen = 255;
let currentColorForBlue = 255;
let plusCombien = 0;


function AffichRgb() {
    affichRgb.innerHTML = `${currentColorForRed} , ${currentColorForGreen} , ${currentColorForBlue}`;
}

AffichRgb();
b1RougePlus.addEventListener('click', rougePlus);
b2RougeMoins.addEventListener("click", rougeMoins);
b3VertPlus.addEventListener("click", vertPlus);
b4VertMoins.addEventListener("click", vertMoins);
b5BleuPlus.addEventListener("click", bleuPlus);
b6BleuMoins.addEventListener("click", bleuMoins);
bHazard.addEventListener("click", hazardColor);



let combienDePlus = document.getElementById("combienDePlus");
combienDePlus.addEventListener('change', ChangeValue);

function ChangeValue() {
    plusCombien = parseInt(combienDePlus.value);
}

function rougePlus() {
    currentColorForRed+=plusCombien
    if (currentColorForRed > 255) {
        currentColorForRed = 255;
    }
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}

 function rougeMoins() {
    currentColorForRed-=plusCombien
    if (currentColorForRed < 0) {
        currentColorForRed = 0;
    }
     bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
     AffichRgb();
 }

function vertPlus() {
    currentColorForGreen += plusCombien
    if (currentColorForGreen > 255) {
        currentColorForGreen = 255;
    }
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}

function vertMoins() {
    currentColorForGreen -= plusCombien
    if (currentColorForGreen < 0) {
        currentColorForGreen = 0;
    }

    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}

function bleuPlus() {
    currentColorForBlue += plusCombien
    if (currentColorForBlue > 255) {
        currentColorForBlue = 255;
    }

    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}

function bleuMoins() {
    currentColorForBlue -= plusCombien
    if (currentColorForBlue < 0){
        currentColorForBlue = 0;
    }
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}


function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
  }


function hazardColor() {
    currentColorForRed = getRandomIntInclusive(0, 255);
    currentColorForGreen = getRandomIntInclusive(0, 255);
    currentColorForBlue = getRandomIntInclusive(0, 255);
    bodyStyle.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}
