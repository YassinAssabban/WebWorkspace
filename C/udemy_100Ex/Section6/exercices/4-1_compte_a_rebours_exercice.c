#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int saisie;

    printf("Donnez un nombre entier pour le compte a rebours : ");
    scanf("%d", &saisie);

    for (int i = saisie; i > 0; i--)
    {
        printf("%d\n", i);
    }

    printf("Boom\n");
    return 0;
}
