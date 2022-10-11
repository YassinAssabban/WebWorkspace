

var fibo = function fibo(nbr) {
    let resultat;

    if (nbr == 0) {
        resultat = 0;
    } else if (nbr == 1) {
        resultat = 1;
    } else resultat = fibo(nbr-1)=fibo(nbr-2);

    return resultat;
}



function fiboAfich(nbr) {
    let strResult = "";
    for (let index = 0; index < nbr; index++) {
        
        
    }

}



let nbr = prompt("Entrez un nombre");
fibo(nbr);
fiboAfich();