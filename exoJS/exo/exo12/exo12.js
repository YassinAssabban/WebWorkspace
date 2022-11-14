let recupBody = document.querySelector("body");
let title = document.createElement("h1");
let p1 = document.createElement("p");
let p2 = document.createElement("p");
let btn = document.createElement("button");
let aLink = document.createElement("a");
recupBody.appendChild(title);
recupBody.appendChild(p1);
recupBody.appendChild(p2);
recupBody.appendChild(btn);
p2.appendChild(aLink);
aLink.setAttribute("href", "#");

let textTitle = document.createTextNode("Exercice Paragraphe");
let textP1 = document.createTextNode("Ceci est le paragraphe 1");
let textALink = document.createTextNode("Ceci est le paragraphe 2");
let textButton = document.createTextNode("Cliquez pour switcher");

title.appendChild(textTitle);
p1.appendChild(textP1);
aLink.appendChild(textALink);
btn.appendChild(textButton);

recupBody.style.backgroundColor = "grey";

let ifReverse = true;

btn.addEventListener("click", function(){
    if (ifReverse) {
        recupBody.replaceChild(p2, p1);
        recupBody.appendChild(p1);
        recupBody.appendChild(btn);
        ifReverse = false;
    } else {
        recupBody.replaceChild(p1, p2);
        recupBody.appendChild(p2);
        recupBody.appendChild(btn);
        ifReverse = true;
    } 
});