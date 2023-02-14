#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define TAILLE_CHAINE 50

typedef struct ARME
{
    char nom[TAILLE_CHAINE];
    int degats;
}Arme;

typedef enum CLASSE
{
    GUERRIER,
    MAGE,
    ASSASSIN
}Classe;

typedef struct PERSO
{
    char nom[TAILLE_CHAINE];
    int pv;
    Classe classe;
    Arme arme;
}Personnage;

void afficherFichePerso(Personnage perso)
{
    printf("\n%s:\n", perso.nom);
    printf("\tPV: %d\n", perso.pv);

    printf("\tClasse: ");
    switch(perso.classe)
    {
        case GUERRIER: printf("Guerrier\n"); break;
        case MAGE: printf("Mage\n"); break;
        default: printf("Assassin\n"); break;
    }

    printf("\tarme: %s (%d)\n", perso.arme.nom, perso.arme.degats);
}

int main()
{
    Arme excalibur = {"Excalibur", 120};
    Arme graal = {"Graal", 1230};

    Personnage arthur = {"Arthur", 200, GUERRIER, excalibur};
    Personnage merlin = {"Merlin", 50, MAGE, graal};

    afficherFichePerso(arthur);
    afficherFichePerso(merlin);

    return 0;
}
