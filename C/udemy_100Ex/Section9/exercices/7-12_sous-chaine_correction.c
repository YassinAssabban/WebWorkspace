#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    const int TAILLE_MAX = 100;

    // variables
    char chaine[TAILLE_MAX];
    char sous_chaine[TAILLE_MAX];

    int taille_chaine =0;
    int taille_sous_chaine =0;

    int inclus = 0;


    // Lecture de la chaine
    printf("Ecrire un message: ");
    if(fgets(chaine, TAILLE_MAX, stdin) == NULL)
        return -1;

    taille_chaine = strlen(chaine) - 1;
    chaine[taille_chaine] = '\0';

    // Lecture de la sous chaine
    printf("Ecrire un autre message: ");
    if(fgets(sous_chaine, TAILLE_MAX, stdin) == NULL)
        return -1;

    taille_sous_chaine = strlen(sous_chaine) - 1;
    sous_chaine[taille_sous_chaine] = '\0';

    if(taille_chaine < taille_sous_chaine)
    {
        inclus = 0;
    }
    else
    {

       for(int i=0; i < (taille_chaine-taille_sous_chaine+1); i++)
       {
           // le premier caractere correspond
           if(chaine[i] == sous_chaine[0])
           {
               inclus = 1;

               //on test les caracteres qui suives
               for(int j=1; j<taille_sous_chaine ; j++)
               {
                   if(chaine[i+j] != sous_chaine[j])
                   {
                       inclus = 0;
                       break;
                   }
               }

               // on a bien la sous chaine
               if(inclus)  break;
           }
       }
   }

    // Affichage du resultat
    printf("\t\"%s\" ", sous_chaine);
    if(inclus)
        printf("est une sous chaine de ");
    else
        printf("n'est une sous chaine de ");
    printf("\"%s\" ", chaine);

    return 0;
}
