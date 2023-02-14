#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    char caractere;

    printf("Donnez un caractEre du tableau ASCII : ");
    scanf("%c", &caractere);

    if (caractere >= '0' && caractere <= '9')
    {
        printf("\tC'est un chiffre\n");
    }
    else if (caractere >= 'a' && caractere <= 'z')
    {
        printf("\tC'est une lettre minuscule\n");
    }
    else if (caractere >= 'A' && caractere <= 'Z')
    {
        printf("\tC'est une lettre majuscule\n");
    }
    else
    {
        printf("\tC'est un caractere special\n");
    }

    return 0;
}
