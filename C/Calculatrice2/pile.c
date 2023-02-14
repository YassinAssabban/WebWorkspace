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
