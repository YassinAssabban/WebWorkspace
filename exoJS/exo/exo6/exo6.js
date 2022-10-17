function Personne(nom, prenom, anneeBorn) {
    this.nom = nom;
    this.prenom = prenom;
    this.anneeBorn = anneeBorn;

    this.age = function(annee) {
        //let Date = new Date.getFullYear();
        return annee - anneeBorn;
    };

    Personne.prototype.toString = function() {
        return "Je suis " + this.prenom + " " + this.nom + "Né en " + this.anneeBorn;
    };
}



let person = new Personne("Assabban", "Yassin", 1999);
console.log(person);
alert(person);
console.log(person.age(2019));
let person2 = new Personne("Alary", "Philippe");
alert(person2);