#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    char lettre_user;
 

    printf("Donnez une lettre : ");
    scanf("%c", &lettre_user);


    printf("Vous avez entrez la lettre ASCII %c, soit :\n", lettre_user);
    printf("\t %d en decimal \n", lettre_user);
    printf("\t %x en hexdecimal \n", lettre_user);
}