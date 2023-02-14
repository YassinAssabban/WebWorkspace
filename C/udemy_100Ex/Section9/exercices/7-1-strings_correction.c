#include <stdio.h>
#include <stdlib.h>

int main()
{
    // Creation de la chaine de caracteres
    char chaine[] = {'S','a','l','u','t',' ','l','e','s',' ','c','o','d','e','u','r','s','!', '\0'};

    // Affichage de la chaine de caracteres
    printf("- %s\n", chaine);

    // Afichage uniquement du mot "Salut"
    chaine[5] = '\0';
    printf("- %s\n", chaine);

    return 0;
}
