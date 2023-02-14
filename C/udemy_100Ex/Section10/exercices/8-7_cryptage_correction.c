#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int entre(int, int, int);

void cryptage(int, char*);
void decryptage(int, char*);

int main()
{
    const int DECALAGE = 56;
    const int TAILLE = 100;
    char message[TAILLE];

    // lecture saisie utilisateur
    printf("Saisir un message a crypter\n");
    if(fgets(message, TAILLE, stdin) == NULL)
        return -1;

    message[strlen(message) - 1] = '\0';

    cryptage(DECALAGE, message);
    printf("Crypte: %s\n", message);
    decryptage(DECALAGE, message);
    printf("Decrypte: %s\n", message);
    return 0;
}

void cryptage(int decalage, char* tab)
{
    const int MIN = 32;
    const int MAX = 126;

    int taille = strlen(tab);
    for(int i =0; i< taille; i++)
        tab[i] = entre(MIN, MAX, tab[i]+decalage) ;
}

void decryptage(int decalage, char* tab)
{
    cryptage(decalage*-1, tab);
}


int entre(int min, int max, int nombre)
{
    max++;
    const int MAX = (max-min);

    // rapporte entre 0 et MAX
    int resultat = nombre - min;

    // Modulo
    resultat = resultat %MAX;

    if(resultat < 0 )
        resultat += MAX;
    resultat += min;

    return resultat;
}
