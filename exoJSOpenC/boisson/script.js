let nbrBoisson;
let ageUser;
const boissonsDispo = ["Coca | 0", "Fanta | 1", "Sprite | 2", "Jupiler Light | 3", "Panaché | 4", "Vodka | 5", "Whisky | 6"];
let p1 = document.createElement("p");
let recupBody = document.querySelector("body");
recupBody.appendChild(p1);
p1.innerHTML = boissonsDispo.join(" <br> ");
let btnChoice = document.createElement("button");
let textBtnChoice = document.createTextNode("Choisir");
btnChoice.appendChild(textBtnChoice);
btnChoice.setAttribute("id", "btnChoice")
recupBody.appendChild(btnChoice);

let btnChoiceUser = document.querySelector("#btnChoice");
btnChoiceUser.addEventListener("click", verifAge);

function verifAge() {
    let choiceUser = prompt("Entrez le numéro de votre choix : ");
    if (choiceUser <= "2") {
        alert("Une boissons tombe !");
    } else if (choiceUser <= 4) {
        alert("test2 OK");
    } else if (choiceUser <= 6) {
        alert("test3 OK");
    } else {
        alert("test4 OK");
    }
}