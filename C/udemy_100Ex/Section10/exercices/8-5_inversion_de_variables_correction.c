#include <stdio.h>
#include <stdlib.h>

void inverser(int* var1, int* var2)
{
    int tmp = *var1;
    *var1 = *var2;
    *var2 = tmp;
}

int main()
{
    int var1 = 9, var2 = 3;

    printf("var1 = %d et var2 = %d\n", var1, var2);
    inverser(&var1, &var2);
    printf("var1 = %d et var2 = %d\n", var1, var2);

    return 0;
}
