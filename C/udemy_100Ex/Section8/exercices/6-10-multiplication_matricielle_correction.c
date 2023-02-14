#include <stdio.h>
#include <stdlib.h>

int main()
{
    // Creation des matrices
    int matriceA [2][3] = {
    {1, 2, 0},
    {4, 3, -1}
    };

    int matriceB [3][2] = {
    {5, 1},
    {2, 3},
    {3, 4}
    };

    //multiplication des matrices A et B
    for(int lig=0; lig<2; lig++)
    {
        for(int col=0; col<2; col++)
        {
            int tmp=0;
            for(int i=0; i<3; i++)
            {
                tmp += matriceA[lig][i] * matriceB[i][col];
            }
            printf("%d ",tmp);
        }
        putchar('\n');
    }

    return 0;
}
