#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int var1 = 123;
    int var2 = 18;

     printf("var1= %d et var2= %d\n", var1, var2);

    int varTemp = var1;
    var1 = var2;
    var2 = varTemp;

    printf("var1= %d et var2= %d\n", var1, var2);

    return 0;
}
