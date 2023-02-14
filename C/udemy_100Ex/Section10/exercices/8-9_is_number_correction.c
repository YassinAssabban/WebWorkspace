#include <stdio.h>
#include <stdlib.h>

const int VRAI = 1;
const int FAUX = 0;


int isNumber(char* tab)
{
    int i=0;
    int index_point = 0;

    while(tab[i] != '\0')
    {
        if(tab[i] < '0' || tab[i] > '9')
        {
            if(tab[i] == '.')
            {
                if(i == 0) return FAUX;
                if(index_point != 0) return FAUX;

                index_point = i;
            }
            else
            {
                return FAUX;
            }
        }

        i++;
    }

    if(index_point == i-1) return FAUX;

    return VRAI;
}

int main()
{

    const int TAILLE_MAX = 100;
    char texte[TAILLE_MAX+1];

    // lecture saisie utilisateur
    printf("Ecrire un nombre: ");
    scanf("%s", texte);

    if(isNumber(texte))
        printf("\tC'est un nombre\n");
    else
        printf("\tCe n'est pas un nombre\n");

    return 0;
}
