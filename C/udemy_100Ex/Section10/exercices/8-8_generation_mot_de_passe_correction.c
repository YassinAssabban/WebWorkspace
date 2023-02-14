#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>


void generateurMDP(char* mdp, int nb_char, int min, int max)
{
    for(int i=0; i<nb_char; i++)
        mdp[i] = (rand() % (max - min + 1)) + min;
}

int main()
{
    const int MIN = 33;
    const int MAX = 126;
    const int TAILLE_MAX = 100;

    char mdp[TAILLE_MAX+1];
    int taille;

    // initialisation de la génération aléatoire
    srand(time(NULL));

    // lecture saisie utilisateur
    printf("Quel taille voulez-vous pour le mot de passe? ");
    scanf("%d", &taille);

    // on evite les depassement de tableau
    if(taille > TAILLE_MAX)
        taille = TAILLE_MAX;

    // generation aleatoire du mdp
    generateurMDP(mdp, taille, MIN, MAX);

    // affichage du mdp
    mdp[taille] = '\0';
    printf("\t%s\n", mdp);

    return 0;
}
