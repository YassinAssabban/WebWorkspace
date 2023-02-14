#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define TAILLE_CHAINE 50
#define TAILLE_REPERTOIRE 5

typedef struct PERSONNE
{
    char nom[TAILLE_CHAINE];
    char numero[TAILLE_CHAINE];
}Personne;

void saisirPersonne(Personne* p_pers);
void afficherPersonne(Personne pers);

void saisirRepertoire(Personne rep[], int nb);
void afficherRepertoire(Personne rep[], int nb);

Personne* chercherPersonne(Personne rep[], int nb, char* nom);

int main()
{
	Personne repertoire[TAILLE_REPERTOIRE];
	Personne* p_personne = NULL;
    char recherche[TAILLE_CHAINE];

    //Création du repertoire
    saisirRepertoire(repertoire, TAILLE_REPERTOIRE);
    afficherRepertoire(repertoire, TAILLE_REPERTOIRE);

    //Recherche dans le repertoire
    printf("nom a rechercher : ");
    scanf("%s", recherche);
    p_personne = chercherPersonne(repertoire, TAILLE_REPERTOIRE, recherche);

    //Affichage du resultat de la recherche
    if(p_personne == NULL)
    {
        printf("Personne non trouve...\n");
    }
    else
    {
        afficherPersonne(*p_personne);
    }
	return 0;
}


void saisirPersonne(Personne* p_pers)
{
	printf("\tNom : "); scanf("%s", p_pers->nom);
	printf("\tNumero : "); scanf("%s", p_pers->numero);
}

void afficherPersonne(Personne pers)
{
    printf("\t%s: %s\n", pers.nom, pers.numero);
}

void saisirRepertoire(Personne rep[], int nb)
{
	for(int i=0; i<nb; i++)
	{
        printf("Ajout nouvelle personne dans le repertoire:\n");
		saisirPersonne(&rep[i]);
	}
}

void afficherRepertoire(Personne rep[], int nb)
{
	printf("Repertoire:\n");
	for(int i=0; i<nb; i++)
        afficherPersonne(rep[i]);
}

Personne* chercherPersonne(Personne rep[], int nb, char* nom)
{
	for(int i=0; i<nb; i++)
	{
		if (strcmp(nom, rep[i].nom) == 0)
		{
			return &rep[i];
		}
	}
	return NULL;
}
