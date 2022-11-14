

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
  }

let nbrRandom = getRandomIntInclusive(1, 1000);
let nbrUserPointer = document.querySelector("#nbrUser");
nbrUserPointer.addEventListener('change', function () {
    nbrUserValue = nbrUserPointer.value;
});
let affichResult = document.getElementById('result');
let recevoirTest = document.querySelector("#envoyeTest");
recevoirTest.addEventListener("click", affichageResultat);

function affichageResultat() {
    console.log(nbrRandom);
    console.log(nbrUserValue);
    if (nbrUserValue == nbrRandom) {
        affichResult.innerHTML = "Bravo vous avez trouvez le nombre ";
    } else if (nbrUserValue > nbrRandom) {
        affichResult.innerHTML = 'Le nombre est plus petit';
     } else if (nbrUserValue < nbrRandom) {
            affichResult.innerHTML = "Le nombre est plus grand";
        }
};