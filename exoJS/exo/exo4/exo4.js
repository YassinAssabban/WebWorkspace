let nbr = prompt("Entrez un nombre");
fiboAffich(nbr);



/************************** A. FIBOAFFICH  ****************************/
function fiboAffich(nbr) {
    let strResult = "";
    for (let index = 0; index < nbr; index++) {
        if (index > 0) {
            strResult =+ '-';
        }
        strResult += fibo(index)
    }
    return strResult
}

var fibo = function fibo(nbr) {
    let resultat;

    if (nbr == 0) {
        resultat = 0;
    } else if (nbr == 1) {
        resultat = 1;
    } else resultat = fibo(nbr-1)=fibo(nbr-2);

    return resultat;
}

/************************** B. APPLY ****************************/


function apply(f, t) {
    f(t);
    /*for (let index = 0; index < t.length; index++) {
        f(t[index]);
    }*/
}

/************************** C. APPLY2  ****************************/

function apply2(f) {
    for (let index = 1; index < arguments.length; index++) {
        if (arguments[index] instanceof Array) {
            apply(f, arguments[i]);
            //
        } else {
            console.log("Le " + (index + 1) + " paramètres n'est pas un tableau");
        }
    }
}

/************************** D. MAKE ACCUMULATOR  ****************************/

function makeAccumulator(f) {
    return function tab(tab) {
        if (tab instanceof Array && tab.length > 0) {
            let tot = tab[0];
            for (let index = 1; index < tab.length; index++)1{
                tot = f(tot, tab[index]);
            }
            return tot;
        }
    }
}