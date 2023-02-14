#include "calc.h"
#include "pile.h"

//	Elle calcule et renvoie le r�sultat de l'expression arithm�tique contenue dans la chaine de caractères.
//  Si le r�sultat ne peut �tre calcul� (division par z�ro ou expression arithm�tique incorrecte) un message d'erreur est ajout�.
//	Elle sera appel�e par le programme principal.
double calculerResultat(char chaine[],int dim, char erreur[])
{
    int i=0;
    int car = chaine[0];
    double operande1, operande2, resultat;
    int valide=1;
    initialiserPile();
    while ( valide && i<dim && car!='\0')
    {
        if ( isdigit(car) )
        {
            empiler(car-48);
            car=chaine[++i];
        }
        else if(car=='+')
        {
            operande2 = depiler();
            operande1 = depiler();
            resultat = operande1 + operande2;
            empiler(resultat);
            car=chaine[++i];
        }
        else if (car== '-')   // ! il faut commencer par dépiler le 2
        {
            operande2 = depiler();
            operande1 = depiler();
            resultat = operande1 - operande2;
            empiler(resultat);
            car=chaine[++i];
        }

        else if (car== '*')
        {
            operande2 = depiler();
            operande1 = depiler();
            resultat = operande1 * operande2;
            empiler(resultat);
            car=chaine[++i];
        }
        else if (car== '/')  // ! il faut commencer par dépiler le 2
        {
            operande2 = depiler();
            if ( operande2==0.0 )
            {
                strcpy(erreur,"\nErreur : division par zero");
                valide=0;
            }
            else
            {
                operande1 = depiler();
                resultat = operande1 / operande2;
                empiler(resultat);
            }
            car=chaine[++i];
        }
        else
        {
            strcpy(erreur,"\nCaractere invalide");
            valide=0;
        }
    }
    resultat = depiler();
    if (valide && car=='\0' && pileVide()) {
        strcpy(erreur,"");
    }
    else
    {
        resultat=NAN;
        if ( strlen(erreur)==0 && (car!='\0' || !pileVide()))
        {
            strcpy(erreur,"Expression arithmetique incorrecte");
        }
    }
    return resultat;
}