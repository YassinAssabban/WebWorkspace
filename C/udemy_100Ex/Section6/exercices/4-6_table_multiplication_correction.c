#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nb_table = 0;

    // lecture de la saisie utilisateur
    printf("Afficher les tables de multiplication 0 a ? ");
    scanf("%d", &nb_table);

    for(int table=0; table <= nb_table; table++)
    {
        //affichage d'une table de multiplication
        printf("Affichage de la table des %d\n", table);
        for(int i=0; i<10; i++)
            printf("\t%dx%d = %d\n", table, i, table*i);
    }
    return 0;
}
