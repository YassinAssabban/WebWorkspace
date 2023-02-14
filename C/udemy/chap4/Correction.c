#include <stdio.h>
#include <stdlib.h>

/*
Declarer une variable
    type nom_de_variable = valeur_init;

Types de variables:
    int (entier) : afficher %d
    short (entier) : afficher %d
    long (entier): affichage %ld
    char (caractere): afficher %c
    float (nombre a virgule): afficher %f
    double (nombre a virgule): afficher %f
*/


int main()
{
    printf("TP 2 - Gestion de la memoire et des variables en C \n\n");

    // Declaration des variables
    int mon_int = -2;
    short mon_short = 2;
    long mon_long = 2;

    float mon_float = 12.3;
    double mon_double = 1.3;

    char mon_char = 'A';


    // Affichage du contenu et de la taille des variables
    printf("Mon int = %d et fait %d octet\n", mon_int, sizeof(int));
    printf("Mon short = %d et fait %d octet\n", mon_short, sizeof(short));
    printf("Mon long = %ld et fait %d octet\n", mon_long, sizeof(long));

    printf("Mon float = %f et fait %d octet\n", mon_float, sizeof(float));
    printf("Mon double = %f et fait %d octet\n", mon_double, sizeof(double));

    printf("Mon char = %c et fait %d octet\n", mon_char, sizeof(char));

    return 0;
}
