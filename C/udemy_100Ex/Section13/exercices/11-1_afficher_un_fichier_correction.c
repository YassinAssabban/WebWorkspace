#include <stdio.h>
#include <stdlib.h>


int main()
{
    //ouverture du fichier en lecture seul
    FILE* pt_fichier= fopen("hello.txt", "r");

    // Gestion des erreurs
    if(pt_fichier == NULL)
    {
        printf("Impossible d'ouvrir le fichier!");
        return -1;
    }

    printf("Contenu du fichier:\n");
    int resultat = 0;

    // Affichage du contenu du fichier
    while(resultat != EOF)
    {
        resultat = fgetc(pt_fichier);
        printf("%c", (char)resultat );
    }

    //Fermeture du fichier
    fclose(pt_fichier);
    return 0;
}
