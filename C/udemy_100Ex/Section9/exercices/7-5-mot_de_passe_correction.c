#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main()
{
    //Constantes
    const int TAILLE_MAX_MDP = 100;
    const int MIN = 5;
    const int MAX = 8;

    //Variables
    char mdp[TAILLE_MAX_MDP+1];
    char confirmation[TAILLE_MAX_MDP+1];
    int taille_mdp = 0;
    int valide = 0;

    do
    {
        // Lecture saisie utilisateur
        printf("Entrez un nouveau mot de passe: ");
        if(fgets(mdp, TAILLE_MAX_MDP, stdin) == NULL)
            return -1;

        // Récupération de la taille de la chaine
        taille_mdp = strlen(mdp);

        // on retire le /n en fin de chaine
        taille_mdp--;
        mdp[taille_mdp] = '\0';

        // Verification de la taille du mdp
        if(taille_mdp > MAX || taille_mdp < MIN)
        {
            printf("\tLe mot de passe doit avoir entre %d et %d caracteres\n", MIN, MAX);
            continue;
        }

        // Verification de la présence d'une majuscule et d'un caractere special
        int majuscule = 0;
        int special = 0;
        int chiffre = 0;
        for(int i=0; i<taille_mdp; i++)
        {
            if(mdp[i] >= 'A' && mdp[i] <= 'Z')
                majuscule = 1;
            else if(mdp[i] >= '0' && mdp[i] <= '9')
                chiffre = 1;
            else if(mdp[i] < 'a' || mdp[i] > 'z')
                special = 1;
        }

        // Il manque une majuscule
        if(majuscule == 0)
        {
            printf("\tLe mot de passe doit contenir au moins une majuscule\n");
            continue;
        }

        // Il manque un caractere special
        if(special == 0)
        {
            printf("\tLe mot de passe doit contenir au moins un cractere special\n");
            continue;
        }

        // Il manque un chiffre
        if(chiffre == 0)
        {
            printf("\tLe mot de passe doit contenir au moins un chiffre\n");
            continue;
        }

        printf("Confirmez le mot de passe: ");
        if(fgets(confirmation, TAILLE_MAX_MDP, stdin) == NULL)
            return -1;

        // on retire le /n en fin de chaine
        taille_mdp = strlen(confirmation) - 1 ;
        confirmation[taille_mdp] = '\0';

        // Test de la confirmation
        if(strcmp(mdp, confirmation) != 0)
        {
            printf("\tLe mot de passe et la confirmation doivent etres identiques\n");
            continue;
        }

        // le nouveau mdp est valide
        valide = 1;
        printf("Mot de passe change !");

    }while(valide == 0);



    return 0;
}
