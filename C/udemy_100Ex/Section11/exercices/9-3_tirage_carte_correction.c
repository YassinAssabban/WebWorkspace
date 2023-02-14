#include <stdio.h>
#include <stdlib.h>
#include <time.h>


typedef enum COULEUR
{
    PIQUE,
    CARREAU,
    COEUR,
    TREFLE
}Couleur;

typedef enum FIGURE
{
    AS=1,
    DEUX,
    TROIS,
    QUATRE,
    CINQ,
    SIX,
    SEPT,
    HUIT,
    NEUF,
    DIX,
    VALET,
    DAME,
    ROI
}Figure;

typedef struct CARTE
{
    Couleur couleur;
    Figure figure;
}Carte;


void affichageCarte(Carte);
void tirageCarte(Carte*);

int main()
{
    srand(time(NULL));
    Carte ma_carte;

    tirageCarte(&ma_carte);
    affichageCarte(ma_carte);

    return 0;
}


void affichageCarte(Carte carte)
{
    // Affichage de la figure
    switch(carte.figure)
    {
        case AS: printf("As"); break;
        case DEUX: printf("2"); break;
        case TROIS: printf("3"); break;
        case QUATRE: printf("4"); break;
        case CINQ: printf("5"); break;
        case SIX: printf("6"); break;
        case SEPT: printf("7"); break;
        case HUIT: printf("8"); break;
        case NEUF: printf("9"); break;
        case DIX: printf("10"); break;
        case VALET: printf("Valet"); break;
        case DAME: printf("Dame"); break;
        case ROI: printf("Roi"); break;
        default: printf("Inconnue"); break;
    }

    printf(" de ");

    // Affichage de la couleur
    switch(carte.couleur)
    {
        case PIQUE: printf("Pique"); break;
        case CARREAU: printf("Carreau"); break;
        case COEUR: printf("Coeur"); break;
        case TREFLE: printf("Trefle"); break;
        default: printf("Inconnue"); break;
    }

    putchar('\n');
}


void tirageCarte(Carte* p_carte)
{
    if(p_carte == NULL)
        return;

    p_carte->figure = (rand() % (ROI-AS+1)) + AS;
    p_carte->couleur = (rand() % (TREFLE-PIQUE+1)) + PIQUE;
}
