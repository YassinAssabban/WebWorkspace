let d1 = document.querySelector('#d1');
let d1p1 = document.querySelector('#d1p1');

d1.addEventListener("click", function () {
    alert("div cliqué");
});

d1p1.addEventListener("click", clickAndStop, true);

function clickAndStop(event) {
    alert("Paragraphe cliqué");
    event.stopPropagation();
}