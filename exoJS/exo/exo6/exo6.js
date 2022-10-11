function Personne(nom, prenom, dateBorn) {
    this.nom = nom;
    this.prenom = prenom;
    this.anneeBorn = anneeBorn;

    this.age = function(anneeBorn) {
        let Date = new Date.getFullYear();

        return Date - anneeBorn;
    };

    Personne.prototype.toString = function() {
        return "Je suis " + this.prenom + " " + this.nom + "Né en " + age;
    };
}



let person = new Personne("Assabban", "Yassin", 1999);
alert(person.toString);