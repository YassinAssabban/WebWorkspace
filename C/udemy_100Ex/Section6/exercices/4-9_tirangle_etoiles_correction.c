#include <stdio.h>
#include <stdlib.h>

int main()
{
    const int MIN = 3, MAX = 10;
    int nb_lignes = 0;

    // lecture de la saisie utilisateur
    do
    {
        printf("Donnez un nombre de lignes [3-10]: ");
        scanf("%d", &nb_lignes);
    }
    while (nb_lignes<MIN || nb_lignes>MAX);

    // Affichage du triangle
    for (int ligne=1 ; ligne<=nb_lignes; ligne++)
    {
        putchar('\n');

        // gestion des espaces
        for(int i=1; i<=nb_lignes-ligne; i++)
            putchar(' ');

        // gestion des *
        for(int i=1; i<ligne*2; i++)
            putchar('*');
    }

    return 0;
}
