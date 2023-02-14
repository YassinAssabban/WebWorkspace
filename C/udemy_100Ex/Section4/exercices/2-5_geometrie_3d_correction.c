#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    printf("TP 4 - Complement sur les variables\n");

    //declaration des variables
    int rayon_cercle=0, diametre_cercle=0;
    float circonference_cercle=0, aire_cercle=0;

    int hauteur=0;
    float volume_cylindre=0, volume_cone=0;

    // recuperation du rayon du cercle
    printf("Donnez le rayon d'un cercle \n");
    scanf("%d", &rayon_cercle);

    //calculs geometrique sur le cercle
    diametre_cercle = 2 * rayon_cercle;
    circonference_cercle = M_PI * (float)diametre_cercle;
    aire_cercle = M_PI * pow(rayon_cercle, 2);

    //Affichage des resultats sur le cercle
    printf("Cercle de rayon %d m\n", rayon_cercle);
    printf("\t diametre = %d m\n", diametre_cercle);
    printf("\t circonference = %f m\n", circonference_cercle);
    printf("\t aire = %f m�\n\n", aire_cercle);

    // recuperation de la hauteur
    printf("Donnez la hauteur de la forme geometrique 3D \n");
    scanf("%d", &hauteur);

    //calculs geometrique 3D
    volume_cylindre = aire_cercle * (float)hauteur;
    volume_cone = volume_cylindre / 3.0;

    //Affichage des resultats sur le cercle
    printf("Cylindre de hauteur %d m a pour volume %f m3\n", volume_cylindre);
    printf("Cone de hauteur %d m a pour volume %f m3 \n", volume_cone);


    return 0;
}
