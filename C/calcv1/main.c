#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#define TAILLE_MAX 100

/*******************************************************
*
*   Cours de Projet C
*   Calculatrice (version 1 seul fichier)
*   O.Legrand 01/2015
*
********************************************************/
// prototypes de fonctions
int continuer(void);
void empiler(double valeur, double pile[], int *indicePile);
double depiler(double pile[], int *indicePile);
void calculerResultat(char chaine[]);

int main(void)
{
    char chaine[TAILLE_MAX];
    do
    {
        printf("\nCalcul a effectuer : ");
        scanf("%s", chaine);
        calculerResultat(chaine);
    }
    while (continuer());

    printf("\n\nFin du programme.");
    getchar();
    return 0;
}

int continuer(void)
{
    char reponse;
    do
    {
        printf("\nVoulez-vous recommencer ?");
        fflush(stdin);
        scanf("%c", &reponse);
        reponse = toupper(reponse);
    }
    while ( reponse!='O' && reponse!='N');
    return reponse=='O';
}

void calculerResultat(char chaine[])
{
    int i=0;
    int indicePile=0;
    int car = chaine[0];
    double pile[TAILLE_MAX/2];
    double operande1, operande2, resultat;
    int valide=1;
    while ( valide && i<TAILLE_MAX && car!='\0')
    {
        if ( isdigit(car) )
        {
            empiler(car-48, pile, &indicePile);
            car=chaine[++i];
        }
        else if(car=='+')
        {
            operande1 = depiler(pile, &indicePile);
            operande2 = depiler(pile, &indicePile);
            resultat = operande1 + operande2;
            empiler(resultat, pile, &indicePile);
            car=chaine[++i];
        }
        else if (car== '-')   // ! il faut commencer par dépiler le 2
        {
            operande2 = depiler(pile, &indicePile);
            operande1 = depiler(pile, &indicePile);
            resultat = operande1 - operande2;
            empiler(resultat, pile, &indicePile);
            car=chaine[++i];
        }

        else if (car== '*')
        {
            operande1 = depiler(pile, &indicePile);
            operande2 = depiler(pile, &indicePile);
            resultat = operande1 * operande2;
            empiler(resultat, pile, &indicePile);
            car=chaine[++i];
        }
        else if (car== '/')  // ! il faut commencer par dépiler le 2
        {
            operande2 = depiler(pile, &indicePile);
            if ( operande2==0.0 )
            {
                printf("\nErreur : division par zero a la position : %d", i+1);
                valide=0;
            }
            else
            {
                operande1 = depiler(pile, &indicePile);
                resultat = operande1 / operande2;
                empiler(resultat, pile, &indicePile);
                car=chaine[++i];
            }
        }
        else
        {
            printf("\nCaractere invalide en %d", i+1);
            valide=0;
        }
    }
    if (valide && indicePile==1 && car=='\0') printf("\nResultat : %lf", pile[0]);
    else printf("\nPas de resultat car il y a une erreur");
}

double depiler(double pile[], int *indicePile)
{
    (*indicePile)--;
    if ( *indicePile>=0) return pile[*indicePile];
    printf("\nErreur pile vide");
    return 0.0;
}

void empiler(double valeur, double pile[], int *indicePile)
{
    if ( *indicePile>=0 ) pile[*indicePile]=valeur;
    (*indicePile)++;
}
