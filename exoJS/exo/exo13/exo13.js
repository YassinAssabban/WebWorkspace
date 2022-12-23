let recupNumCard = document.getElementById("numCard");
let recupButton = document.getElementById("submitForm");

// let regExForCard = new RegExp("/^[0-9]{16}$/gm");
let valueOfCard = recupNumCard.value;
let regEx = /[0-9]{16}/m;




function cardIsValid(evt) {
    numCard.style.color = 'black';
    console.log(recupNumCard.value);
if (!regEx.test(recupNumCard.value)){
    recupNumCard.style.color = 'red';
    
} else {
    recupNumCard.style.color = 'green';
}
evt.preventDefault();
    recupButton.focus();
}

recupButton.addEventListener("click", cardIsValid);


// Good : 4624748233249780
// Bad : 4624 7482 3324080
// RegEx : "^4\d\d\d\t\d\d\d\d\t\d\d\d\d\t\d\d\d\d$"