#include <stdio.h>
#include <stdlib.h>

int main()
{
    char tab[] = {'C', 'O', 'D', 'E', 'R'};

    //annotation simple
    for(int i=0; i<5; i++)
        printf("tab[%d] = %c (%p)\n", i, tab[i], &tab[i]);

    putchar('\n');

    //annotation pointeur
    for(int i=0; i<5; i++)
        printf("*(tab+%d)= %c (%p)\n", i, *(tab+i), (tab+i));

    return 0;
}
