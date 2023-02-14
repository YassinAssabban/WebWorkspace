#include <stdio.h>
#include <stdlib.h>

int main()
{
    //ouverture du fichier en lecture
    FILE* pt_fichier= fopen("compteur.txt", "r");

    // Lecture de la valeur precedente
    long nb_execution = 0;
    if(pt_fichier != NULL)
    {
        fscanf(pt_fichier, "%ld", &nb_execution);
        fclose(pt_fichier);
    }

    // augmentation du nombre d'executions
    nb_execution++;
    printf("J'ai ete execute %ld fois !", nb_execution);

    // sauvegarde du nombre d'executions
    pt_fichier= fopen("compteur.txt", "w");
    if(pt_fichier == NULL)
    {
        printf("Impossible d'ouvrir le fichier!");
        return -1;
    }
    fprintf(pt_fichier, "%ld", nb_execution);

    //Fermeture du fichier
    fclose(pt_fichier);
    return 0;
}
