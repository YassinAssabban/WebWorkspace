#include <stdio.h>
#include <stdlib.h>


int main()
{
    // declaration de variables
    int age;
    float taille;
    char prenom, nom;

    //lecture au clavier des informations utilisateur
    printf("Donnez votre age et taille en mettre: ");
    scanf("%d %f", &age, &taille);

    fflush(stdin); //vide le buffer de lecture

    printf("Donnez vos initiales: ");
    scanf("%c%c", &prenom, &nom);

    //affichage des variables
    printf("Vous avez %d ans et vous mesurez %.2f m\n", age, taille);
    printf("Vos initiales sont %c.%c\n", prenom, nom);

    return 0;
}
