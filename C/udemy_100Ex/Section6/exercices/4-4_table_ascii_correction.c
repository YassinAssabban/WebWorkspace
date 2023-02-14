#include <stdio.h>
#include <stdlib.h>

int main()
{
    printf("MA TABLE ASCII\n\n");
    printf("HEX\tDEC\tCHAR\n");

    for(int i=32; i<127; i++)
        printf("0x%x\t%d\t%c\n", i, i, i);

    return 0;
}
