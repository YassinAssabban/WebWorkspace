#include <stdio.h>
#include <stdlib.h>


int main()
{
    // declaration de variables
    int age_utilisateur = 23;
    float taille_utilisateur = 1.72;
    char note_utilisateur = 'A';

    //affichage des variables
    printf("L'utilisateur a %d ans et mesure %.2f m\n", age_utilisateur, taille_utilisateur);
    printf("Il a une note de %c\n", note_utilisateur);

    return 0;
}
