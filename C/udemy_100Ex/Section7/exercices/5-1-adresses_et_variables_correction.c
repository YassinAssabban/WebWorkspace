#include <stdio.h>
#include <stdlib.h>

int main()
{
    char lettre = 'A';

    printf("Informations sur ma variable:\n");

    printf("\ttype: char\n");
    printf("\ttaille: %d octet\n", sizeof(lettre));
    printf("\tcontenu: %c\n", lettre);
    printf("\tadresse: %p\n", &lettre);

    return 0;
}
