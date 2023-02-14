#include <stdio.h>
#include <stdlib.h>
#include <math.h>


int main(int argc, char const *argv[])
{
    int nombre;
  
    printf("Donnez une nombre entier: ");
    scanf("%d", &nombre);

      float racine_carre = sqrt(nombre);

    if (racine_carre == round(racine_carre))
     {
        printf("\t%d est un carre parfait (%dx%d) \n", nombre, (int)racine_carre, (int)racine_carre);
    }
    else
    {
        printf("\t%d n'est pas un carre parfait\n", nombre);
    }
    
    return 0;
}
