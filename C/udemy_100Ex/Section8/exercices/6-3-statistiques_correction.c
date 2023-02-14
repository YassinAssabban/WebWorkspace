#include <stdio.h>
#include <stdlib.h>

int main()
{
    const int TAILLE = 5;
    int tab[TAILLE];

    //lecture saisie utilisateur
    printf("Remplir ce tableau de %d entiers\n", TAILLE);
    for(int i=0; i<TAILLE; i++)
    {
        printf("tab[%d] = ", i);
        scanf("%d", tab+i);
    }

    //statistiques
    int min = tab[0];
    int max = tab[0];
    int somme = tab[0];
    for(int i=1; i<TAILLE; i++)
    {
        if(tab[i] < min) min = tab[i];
        if(tab[i] > max) max = tab[i];
        somme += tab[i];
    }
    float moyenne = (float)somme / (float)TAILLE;

    // affichage du resultat
    printf("min=%d, max=%d, somme=%d, moyenne=%f", min, max, somme, moyenne);

    return 0;
}
