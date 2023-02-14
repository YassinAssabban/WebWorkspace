#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char const *argv[])
{
    printf("\tTP 2.5 Geometrie 3D\n\n");

    int rayon = 0, diametre = 0;
    float circonference_cercle = 0, aire_cercle = 0;



    int hauteur = 0;
    float volume_cylindre = 0, volume_cone = 0;

    printf("Entrez le rayon du cercle : ");
    scanf("%d", &rayon);

    diametre = rayon * 2;
    circonference_cercle = diametre * M_PI;
    aire_cercle = M_PI * pow(rayon, 2);

    printf("\tDiametre : %d \n", diametre);
    printf("\tCirconference : %.4f \n", circonference_cercle);
    printf("\tAire : %.4f \n\n", aire_cercle);

    printf("Entrez le hauteur du cercle : ");
    scanf("%d", &hauteur);

    volume_cylindre = M_PI * pow(rayon, 2) * hauteur;
    volume_cone = volume_cylindre / 3;

    printf("\tVolume du cylindre : %.4f \n", volume_cylindre);
    printf("\tVolume du cone %.4f \n\n", volume_cone);




    return 0;
}
