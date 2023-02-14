#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int de(int);
int des(int, int);


int main()
{
    // initialisation de la g�n�ration al�atoire
    srand(time(NULL));

    // Utilisation des fonctions de d�s
    printf("on lance un De de %d: %d\n", 6, de(6));
    printf("on lance %d Des de %d: %d\n", 6, 10, des(6, 10));

    return 0;
}

// lancement d'un d�
int de(int nb_faces)
{
    int resultat = (rand() % (nb_faces)) + 1;
    return resultat;
}

// lancement de plusieurs d�s
int des(int nb_des, int nb_faces)
{
    int total = 0;

    for(int i=1; i <= nb_des; i++)
        total += de(nb_faces);

    return total;
}
