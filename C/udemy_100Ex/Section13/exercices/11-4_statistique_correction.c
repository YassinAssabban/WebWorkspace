#include <stdio.h>
#include <stdlib.h>

#define PATH_FILE "hello.txt"

int main()
{
    //ouverture du fichier en lecture
    FILE* pt_fichier= fopen(PATH_FILE, "r");
    if(pt_fichier == NULL)
    {
        printf("Impossible d'ouvrir le fichier!");
        return -1;
    }

    int lecture = 0;
    int nb_char = 0;
    int nb_mot = 0;
    int nouveau_mot = 1;

    //Analyse du contenu du fichier
    do{
        lecture = fgetc(pt_fichier);
        if(lecture == EOF) break;

        if(lecture == ' ' || lecture == '\n' )
        {
            nouveau_mot = 1;
        }
        else if(nouveau_mot)
        {
            nouveau_mot = 0;
            nb_mot++;
        }

        nb_char++;
    }while(lecture != EOF);

    // Affichage du resultat
    printf("Statistiques sur le fichier %s:\n", PATH_FILE);
    printf("\tNombre de caracteres: %d\n", nb_char);
    printf("\tNombre de mots: %d\n", nb_mot);

    //Fermeture du fichier
    fclose(pt_fichier);
    return 0;
}
