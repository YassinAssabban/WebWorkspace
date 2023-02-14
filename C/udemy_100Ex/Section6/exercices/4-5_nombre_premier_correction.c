#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nombre = 0;
    int premier = 1;

    // lecture de la saisie utilisateur
    printf("Donnez un entier: ");
    scanf("%d", &nombre);

    // gestion du cas particulier de 0 et 1
    if(nombre == 0 || nombre == 1)
        premier = 0;
    else
    {
        for(int i=2; i< nombre; i++)
        {
            // on a un diviseur entier
            if(nombre%i == 0)
            {
                premier = 0;
                break;
            }
        }
    }

    if(premier) printf("\t est un nombre premier\n");
    else  printf("\t n'est pas un nombre premier\n");
    return 0;
}
