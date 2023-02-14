#include <stdio.h>
#include <stdlib.h>

int main()
{
    char prenom = 'A', nom='Z';

    char* p_prenom = &prenom;
    char* p_nom = &nom;


    printf("vos initiales %c.%c\n", prenom, nom);

    //inversion
    char tmp = *p_prenom;
    *p_prenom = *p_nom;
    *p_nom = tmp;

    printf("vos initiales inverse %c.%c\n", prenom, nom);
    return 0;
}
