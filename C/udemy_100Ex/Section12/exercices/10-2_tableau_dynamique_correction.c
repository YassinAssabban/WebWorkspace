#include <stdio.h>
#include <stdlib.h>


int main()
{
    // lecture taille
    int taille = 0;
    printf("Taille du tableau? ");
    scanf("%d", &taille);

    //allocation dynamique du
    int* tab = (int*)malloc(taille * sizeof(int) );

    //gestion erreurs
    if(tab == NULL)
        return -1;

    //remplissage du tableau
    for(int i=0; i<taille; i++)
    {
        printf("Tab[%d] =", i);
        scanf("%d", (tab+i));
    }

    //affichage du tableau
    printf("Tab = {");
    for(int i=0; i<taille; i++)
    {
        if(i < taille-1)
            printf("%d, ", *(tab+i));
        else
            printf("%d}", *(tab+i));
    }

    //Liberation de la memoire
    free(tab);

    return 0;
}
