#include <stdio.h>
#include <stdlib.h>

int taille(char*);
char* concat(char*, char*);

int main()
{
    const int TAILLE = 100;
    char chaine1[TAILLE];
    char chaine2[TAILLE];

    // lecture saisie utilisateur
    printf("Entrez deux messages:\n");
    fgets(chaine1, TAILLE-1, stdin);
    fgets(chaine2, TAILLE-1, stdin);

    // On retire le '\n' de la saisie utilisateur
    chaine1[taille(chaine1)-1] = '\0';
    chaine2[taille(chaine2)-1] = '\0';

    // on concatene et affiche le resultat
    printf("\nConcatener \"%s\" et \"%s\" : ", chaine1, chaine2);
    char* concatene = concat(chaine1, chaine2);
    printf("\"%s\"", concatene);

    return 0;
}


int taille(char* chaine)
{
    int i = 0;

    while(chaine[i] != '\0')
        i++;

    return i;
}


char* concat(char* left, char* right)
{
    int i_left = 0;
    int i_right = 0;

    // on cherche la fin de la chaine de destination
    i_left = taille(left);

    // on concatene les deux chaines
    while(right[i_right] != '\0')
    {
        left[i_left + i_right] = right[i_right];
        i_right++;
    }

    // on ajoute la fin de chaines
    left[i_left + i_right] = '\0';

    return left;
}
