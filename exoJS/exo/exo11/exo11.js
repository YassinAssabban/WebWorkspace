
let nbrUserPointer = document.querySelector("#nbrUser");
nbrUserPointer.addEventListener('change', function () {
    nbrUserValue = nbrUserPointer.value;
});

let affichResult = document.getElementById('result');
let recevoirTest = document.querySelector("#envoyeNombre");
recevoirTest.addEventListener("click", traitementAI);

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
  }

  let nbrRandomAI = 0;
  let cpt = 0;
  min = 1;
  max = 1000;

function traitementAI() {
    nbrRandomAI = getRandomIntInclusive(min, max);


    while (!(nbrUserValue == nbrRandomAI)) {
        nbrRandomAI = getRandomIntInclusive(min, max);
        affichageResultat();
        cpt++;
    }
}

  function affichageResultat() {
        console.log(nbrRandomAI);
        console.log(nbrUserValue);

        if (nbrUserValue == nbrRandomAI) {
            affichResult.innerHTML = "Bravo ! l'AI a trouvée " + '<br>' + 'en ' + cpt + ' essai(s)';
            min = 1;
            max = 1000;
            cpt = 0;
        } else if (nbrUserValue > nbrRandomAI) {
            affichResult.innerHTML = 'Le nombre est plus grand';
            min = nbrRandomAI;
         } else if (nbrUserValue < nbrRandomAI) {
                affichResult.innerHTML = "Le nombre est plus petit";
            max = nbrRandomAI;
            }

  }