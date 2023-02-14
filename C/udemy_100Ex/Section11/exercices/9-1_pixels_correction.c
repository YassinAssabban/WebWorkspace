#include <stdio.h>
#include <stdlib.h>

// structure de pixel
typedef struct PIXEL
{
    int x;
    int y;

    char color[20];
}Pixel;

//affichage info pixel
void pixelInfo(Pixel pix)
{
    printf("\nPixel:\n");
    printf("X: %d\n", pix.x);
    printf("Y: %d\n", pix.y);
    printf("Color: %s\n", pix.color);
}


int main()
{
    Pixel pix1 = {12, 3, "Red"};
    Pixel pix2 = {0, 0, "Black"};

    pixelInfo(pix1);
    pixelInfo(pix2);

    return 0;
}
