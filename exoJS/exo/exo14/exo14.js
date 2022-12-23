let recupBody = document.querySelector("body");
let recupBtn = document.querySelector("#affichRgb");
let btnForClick = document.createElement("button");
recupBody.appendChild(btnForClick);
btnForClick.innerHTML = "Stop !";
let btnForContinue = document.createElement("button");
recupBody.appendChild(btnForContinue);
btnForContinue.innerHTML = "Reprendre";


let currentColorForRed = 255;
let currentColorForGreen = 255;
let currentColorForBlue = 255;

function hazardColor() {
    currentColorForRed = getRandomIntInclusive(0, 255);
    currentColorForGreen = getRandomIntInclusive(0, 255);
    currentColorForBlue = getRandomIntInclusive(0, 255);
    recupBody.style.backgroundColor = 'rgb(' + currentColorForRed + ', ' + currentColorForGreen + ', ' + currentColorForBlue + ' )';
    AffichRgb();
}


function AffichRgb() {
    recupBtn.innerHTML = `${currentColorForRed} , ${currentColorForGreen} , ${currentColorForBlue}`;
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
  }


function Timer() {
    intervalSetter = setInterval(function() {
        hazardColor();
    }, 1000);
}

function stopTimer() {
    clearInterval(intervalSetter);
}


Timer();
btnForClick.addEventListener("click", stopTimer);
btnForContinue.addEventListener("click", Timer);
