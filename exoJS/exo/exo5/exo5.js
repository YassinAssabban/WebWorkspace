let Personne = {
    prenom : "Yassin",
    papa : {
        prenom : "nomPere",
        grandMere : {
            prenom : "nomGrandMere",
        },
        grandPere : {
            prenom : "nomGrandPere",
        },
    },
    maman : {
        prenom : "nomMere",
        grandMere : {
            prenom : "nomGrandMere",
        },
        grandPere : {
            prenom : "nomGrandPere",
        },
    }

    
}
    alert("Bonjour" + " " + Personne.maman.grandMere.prenom);