#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{

    int nombre1, nombre2, resultat;
    char operateur;

    printf("Bonjour et bienvenue dans SUPER CALCULATOR!\n");
    printf("Indiquez l'operation mathematique que je doit resoudre.\n");
    printf("\t -sous la forme [nombre1 operateur nombre2] par exemple (2+3)\n");
    printf("\t -operateurs possibles [+, -, *, /]\n");

    printf(">");
    scanf("%d%c%d", &nombre1, &operateur, &nombre2);

    if (operateur == '/' && nombre2 == 0)
    {
        printf("Attention la division par 0 est impossible!\n");
    }
    else
    {
        switch (operateur)
        {
        case '+':
            resultat = nombre1 + nombre2;
            break;

        case '-':
            resultat = nombre1 - nombre2;
            break;
            
        case '*':
            resultat = nombre1 * nombre2;
            break;

        case '/':
            resultat = nombre1 / nombre2;
            break;

        default:
            printf("Operateur '%c' invalide. Operateurs possibles [+, -, *, /]\n", operateur);
            break;
        }
    }

    printf("Trop simple! le resultat est: %d %c %d = %d.\n",nombre1 , operateur, nombre2, resultat);
    

    return 0;
}
