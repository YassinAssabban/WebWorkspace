let b1 = document.querySelector("button");
let d1 = document.querySelector("div");

// b1.onclick = function() {
//     alert('Bouton cliqué');
// };

// b1.onmouseover = function () {
//     this.style.backgroundColor = 'lightgreen';
// };
// b1.onmouseout = function () {
//     this.style.backgroundColor = 'orange';
// };

// d1.onmouseover = function () {
//     this.style.backgroundColor = 'orange';
// };
// d1.onmouseout = function () {
//     this.style.backgroundColor = '';
// };

b1.addEventListener('mouseover', function () {
    this.style.backgroundColor = 'ORANGE';
});

b1.addEventListener('mouseout', function () {
    this.style.backgroundColor = 'lightgreen';
});

b1.addEventListener('click', function() {
    alert('Bouton cliqué');
    });

d1.addEventListener('mouseover', function () {
         this.style.backgroundColor = 'orange';
     })

d1.addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    })

