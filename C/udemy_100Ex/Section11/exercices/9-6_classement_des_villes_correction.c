#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define TAILLE_NOM 50
#define TAILLE_LISTE 5

typedef struct VILLE
{
    char nom[TAILLE_NOM];
    long nb_habitants;
}Ville;

void afficherClassement(Ville villes[], int nb);
void classerVilles(Ville villes[], int nb);

int main()
{
	Ville villes[TAILLE_LISTE]=
	{
	    {"Metz", 117890},
	    {"Nevers", 33325},
	    {"Paris", 2190327},
	    {"Reims", 183113},
	    {"Lyon", 515695}
	};

    // Classement des villes
    classerVilles(villes, TAILLE_LISTE);
    afficherClassement(villes, TAILLE_LISTE);

	return 0;
}


void afficherClassement(Ville villes[], int nb)
{
    printf("Top %d des villes:\n", nb);
	for(int i=0; i<nb; i++)
        printf("%d: %s \t %ld\n", i+1, villes[i].nom, villes[i].nb_habitants);
}

void classerVilles(Ville villes[], int nb)
{
    Ville tmp;

    //utilisation du tri bulle
    for(int i=0; i<nb-1; i++)
    {
        for(int j=0;j<nb-i-1;j++)
        {
            if(villes[j].nb_habitants < villes[j+1].nb_habitants)
            {
                strcpy(tmp.nom,villes[j].nom);
                tmp.nb_habitants = villes[j].nb_habitants;

                strcpy(villes[j].nom,villes[j+1].nom);
                villes[j].nb_habitants = villes[j+1].nb_habitants;

                strcpy(villes[j+1].nom,tmp.nom);
                villes[j+1].nb_habitants = tmp.nb_habitants;
            }
        }
    }
}
