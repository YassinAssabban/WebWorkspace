#include <stdio.h>
#include <stdlib.h>

int main()
{
    // Creation des matrices
    int matriceA [3][2] = {
    {1, 3},
    {1, 0},
    {1, 2}
    };

    int matriceB [3][2] = {
    {0, 0},
    {7, 5},
    {2, 1}
    };

    //addition des matrices A et B
    for(int i=0; i<3; i++)
    {
        for(int j=0; j<2; j++)
        {
            printf("%d ", matriceA[i][j] + matriceB[i][j]);
        }
        putchar('\n');
    }

    return 0;
}
