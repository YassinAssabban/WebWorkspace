#include <stdio.h>
#include <stdlib.h>

int main(int argc, char const *argv[])
{
    int my_int = -2;
    short my_short = 2;
    long my_long = 1999;
    float my_float = 19.9;
    double my_double = 1.9;
    char my_char = 'Y';

    printf("Mon int = %d et fait  %d octets \n", my_int ,sizeof(int));
    printf("Mon short = %d et fait  %d octets \n", my_short, sizeof(short));
    printf("Mon long = %ld et fait  %d octets \n", my_long, sizeof(long));
    printf("Mon float = %f et fait  %d octets \n", my_float, sizeof(float));
    printf("Mon double = %f et fait  %d octets \n", my_double, sizeof(double));
    printf("Mon char = %c et fait  %d octets \n", my_char, sizeof(char));
}