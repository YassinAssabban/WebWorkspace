#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int nombre = 0, premier = 1;

    printf("Donnez un entier : ");
    scanf("%d", &nombre);

    if(nombre == 0 || nombre == 1)
    {
        premier = 0;
    }
    else
    {
        for(int i = 2; i < nombre; i++)
        {
            if(nombre%i == 0)
            {
                premier = 0;
            }
        }
    }

    if(premier){
        printf("\t est un nombre premier\n");
    }else{
        printf("\tn'est pas un nombre premier\n");
    }
    
    return 0;
}
