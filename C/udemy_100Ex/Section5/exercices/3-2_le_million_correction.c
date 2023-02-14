#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <math.h>

/** Calcul combien de digit il y a dans un entier donné en param.

Params:
    - nombre(long): Entier pour lequel on souhaite compter les digits

Returns:
    Le nombre de digits dans l'entier
**/
int calcul_nb_digit(long nombre)
{
    int nb_digit = 1;
    while(nombre/10 != 0){
        nombre /= 10;
        nb_digit++;
    }
    return nb_digit;
}

/** Affiche un entier sous forme monétaire.

Params:
    - montant(long): Montant à afficher
    - separateur(char): Séparateur a utiliser
**/
void afficher_montant(long montant, char separateur)
{
    // on compte le nombre de digits
    int nb_digits = calcul_nb_digit(montant);

    for(int i=(nb_digits-1); i>=3; i--)
    {
        // Calcul du déplacement de la virgule sur l'entier pour isoler le digit de gauche
        long filtre = pow(10, i);

        // Affichage du digit
        int digit = montant/filtre;
        printf("%d", digit);

        // Ajoute le séparateur
        if(i%3 == 0)
            printf("%c", separateur);

        //on soustrait la valeur déjà traitée
        montant %= filtre;
    }

    // On affiche le reste
    printf("%ld", montant);
}


/** Affiche un entier sous forme monétaire.

Params:
    - montant(long): Montant à afficher
    - separateur(char): Séparateur a utiliser
**/
void afficher_montant_str(long montant, char separateur)
{
    // on compte le nombre de digits
    int nb_digits = calcul_nb_digit(montant);

    // on alloue un tableau de char pour stoquer le montant sous forme de string
    char* montant_str = (char*)malloc((nb_digits+1) * sizeof(char));

    // Conversion du montant en string
    int nb_chars = sprintf(montant_str, "%ld", montant);
    if(nb_chars != nb_digits) return;

    // Parcours de la string char par char pour afficher les digits et separateurs
    for(int i=0; i<nb_digits; i++)
    {
        if(i != 0 && (nb_digits -i)%3 == 0)
            printf("%c", separateur);
        printf("%c", montant_str[i]);
    }
}

// Version bonus
int main()
{
    long gain;

    // Lecture du gain de l'utilisateur
    printf("Combien avez-vous gagne? ");
    scanf("%ld", &gain);

    afficher_montant(gain, ' ');
    printf(" euros\nWow!");
}

/* VERSION SIMPLE
int main()
{
    long gain;

    // Lecture du gain de l'utilisateur
    printf("Combien avez-vous gagne? ");
    scanf("%ld", &gain);

    // Affichage du gain
    printf("\tWow ");

    if(gain >= 1000000)
    {
        printf("%.3ld ", gain/1000000);
        gain %= 1000000;
    }

    if(gain >= 1000)
    {
        printf("%.3ld ", gain/1000);
        gain %= 1000;
    }
    printf("%.3ld euros !", gain);



    return 0;
}
*/
