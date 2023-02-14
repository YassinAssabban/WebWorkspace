#include <stdio.h>
#include <stdlib.h>

int main()
{
    //ouverture du fichier en mode ajout
    FILE* pt_fichier= fopen("hello.txt", "a");

    // Gestion des erreurs
    if(pt_fichier == NULL)
    {
        printf("Impossible d'ouvrir le fichier!");
        return -1;
    }

    // Ajout du nouveau texte dans le fichier
    fputs("Salut les codeurs,\n", pt_fichier );
    fputs("bienvenue dans cette formation sur le C!\n", pt_fichier );

    //Fermeture du fichier
    fclose(pt_fichier);
    return 0;
}
