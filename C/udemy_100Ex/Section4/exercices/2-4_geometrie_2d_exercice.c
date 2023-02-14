#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int hauteur, largeur, perimetre, surface;


    printf("Entrez la hauteur : ");
    scanf("%d", &hauteur);
    printf("Entrez la largeur : ");
    scanf("%d", &largeur);


    surface = hauteur * largeur;
    perimetre = (hauteur * 2) + (largeur * 2);

    printf("\tLa surface vaut %d\n", surface);
    printf("\tLa perimetre vaut %d\n", perimetre);

    return 0;
}