#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char* concat(char* chaine1, char* chaine2);

int main()
{
    //allocation de la memoire
    char* chaine1 = (char*)malloc(10*sizeof(char));
    char* chaine2 = (char*)malloc(10*sizeof(char));

    //initialisation des chaines
    strcpy(chaine1, "Salut les");
    strcpy(chaine2, " codeurs!");

    //affichage du resultat
    printf("Chaine 1: %s\n", chaine1);
    printf("Chaine 2: %s\n", chaine2);
    chaine1 = concat(chaine1, chaine2);
    printf("Concat: %s\n", chaine1);

    return 0;
}


char* concat(char* chaine1, char* chaine2)
{
    if(chaine1 == NULL || chaine2 == NULL)
        return NULL;

    int taille1 = strlen(chaine1);
    int taille2 = strlen(chaine2);

    chaine1 = realloc(chaine1, (taille1+taille2+1) * sizeof(char));
    for(int i=0; i<=taille2 ; i++)
        chaine1[taille1+i] = chaine2[i];

    return chaine1;
}
