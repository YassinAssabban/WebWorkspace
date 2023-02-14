#include "..\includes\calc.c"
#include "..\includes\pile.c"

int main()
{
    char chaine[DIM];
    char erreur[DIM];
    do
    {
        strcpy(erreur, "");
        printf("Expression : ");  
        fflush(stdin);      
        scanf("%s", chaine);
        double resultat = calculerResultat(chaine, DIM, erreur);
        if (!strcmp(erreur, ""))
        {
            printf("Resultat de %s : %10.2f \n", chaine, resultat);
        }
        else
        {
            printf("Erreur : %s\n", erreur);
        }
    } while (recommencer());
    return 0;
}


int recommencer(void)
{
    char reponse = ' ';
    do
    {
        printf("Voulez-vous recommencer ? (o/n)");
        fflush(stdin);
        scanf("%c", &reponse);
    } while (reponse != 'o' && reponse != 'n');
    return reponse == 'o';
}