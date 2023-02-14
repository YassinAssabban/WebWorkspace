#include <stdio.h>
#include <stdlib.h>

#define MIN 0
#define MAX 100


int main()
{
    int taille = 0;
    int* tab= NULL;
    int saisie=-1;
    int i;

    printf("Entrez des entiers compris entre 0 et 100\n");
    do
    {
        scanf("%d", &saisie);

        if(saisie >= MIN && saisie <= MAX)
        {
            //on ajoute une case au tableau
            taille++;
            tab = realloc(tab, taille * sizeof(int));

            // on range la valeur de maniere croissante
            for(i=(taille-1); i>0; i--)
            {
                tab[i] = tab[i-1];

                if(tab[i] <= saisie) // bonne position
                    break;
            }
            tab[i] = saisie;
        }

    }while(saisie >= MIN && saisie <= MAX);

    // Affichage du resultat
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
