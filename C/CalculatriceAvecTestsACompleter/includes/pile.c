#include "pile.h"

static double pile[DIM];
static int indicePile=0;

void empiler(double valeur)
{
    pile[indicePile] = valeur;
    indicePile++;
}

double depiler()
{
    indicePile--;
    return pile[indicePile];
}

void initialiserPile() {
    indicePile=0;
}

int pileVide() {
    return indicePile==0;
}