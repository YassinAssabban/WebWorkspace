#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    int nb_vie = 10;

    char mot_secret[] = "PROGRAMMATION";
    int taille_mot = strlen(mot_secret);

    char saisie_utilisateur[taille_mot+1];

    char mot_trouve[taille_mot+1];
    for(int i=0; i<taille_mot; i++) mot_trouve[i] = '-';
    mot_trouve[taille_mot] = '\0';

    do
    {
        //lecture saisie utilisateur
        printf("Donner une lettre ou un mot > ");
        fflush(stdin);
        fgets(saisie_utilisateur, taille_mot+1, stdin);

        int taille_saisie = strlen(saisie_utilisateur);

        if(taille_saisie == 2)
        {

            //recherche de la presence de la lettre
            int lettre_presente = 0;
            for(int i=0; i<taille_mot; i++)
            {
                if(mot_secret[i] == saisie_utilisateur[0])
                {
                    lettre_presente = 1;
                    mot_trouve[i] = saisie_utilisateur[0];
                }
            }

            //affichage du resultat
            if(lettre_presente)
            {
                printf("Oui, la lettre '%c' est bien presente dans le mot \"%s\" \n", saisie_utilisateur[0], mot_trouve);
            }
            else
            {
                nb_vie--;
                printf("Non, la lettre '%c' n'est pas presente dans le mot \"%s\" \n", saisie_utilisateur[0], mot_trouve);
            }
        }else if(taille_saisie > 2)
        {
            if(strcasecmp(mot_secret, saisie_utilisateur) == 0)
            {
                strcpy(mot_trouve, mot_secret);
            }
            else
            {
                nb_vie--;
                printf("Non, ce n'est pas le bon mot!\n");
            }
        }


        //test de la victoire
        if(strcmp(mot_secret, mot_trouve) == 0)
        {
            printf("Bravos, vous avez trouve le mot \"%s\" et il vous reste %d vies", mot_secret, nb_vie);
            break;
        }


    }while(nb_vie > 0);

    if(nb_vie == 0)
        printf("dommage, vous le mot secret etait \"%s\"", mot_secret);

    return 0;
}
