#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    

    printf("MA TABLE ASCII\n\n");
    printf("HEX\tDEC\tCHAR\n");

    for (int i = 32; i < 126; i++)
    {
        printf("0x%x\t%d\t%c\n",i ,i ,i);
    }
    

    return 0;
}
