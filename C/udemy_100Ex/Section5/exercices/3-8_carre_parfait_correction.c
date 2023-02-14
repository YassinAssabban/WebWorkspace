#include <stdio.h>
#include <stdlib.h>
#include <math.h>


int main()
{
    int nombre = 0;
    float racine_carre = 0;

    // Lecture de la saisie utilisateur
    printf("Donnez une nombre entier: ");
    scanf("%d", &nombre);

    // Calcul de la racine carre
    racine_carre = sqrt((float)nombre);

    // Test si la racine carre est un entier ou non
    if( racine_carre == round(racine_carre) )
        printf("\test un carre parfait (%dx%d)\n",(int)racine_carre, (int)racine_carre );
    else
        printf("\tn'est pas un carre parfait\n");

    return 0;
}
