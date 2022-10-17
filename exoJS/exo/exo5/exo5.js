let Personne = {
    prenom : "Marc",
    papa : {
        prenom : "Benoit",
        maman : {
            prenom : "Régine",
        },
        papa : {
            prenom : "George",
        },
    },
    maman : {
        prenom : "Catherine",
        maman : {
            prenom : "Lucie",
        },
        papa : {
            prenom : "René",
        },
    }

}


    console.log(Personne.maman.grandMere.prenom);