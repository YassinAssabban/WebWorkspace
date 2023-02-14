#include <stdio.h>
#include <stdlib.h>
#include <math.h>

// structure de point
typedef struct POINT
{
    float x;
    float y;
}Point;

float distancePoints(Point ptA, Point ptB)
{
    return sqrt(pow(ptB.x-ptA.x, 2) + pow(ptB.y-ptA.y, 2));
}

int main()
{
    Point pointA = {1.0, 0.0};
    Point pointB = {12.2, 3.0};

    // affichages des points
    printf("Point A: (%.2f, %.2f)\n", pointA.x, pointA.y);
    printf("Point B: (%.2f, %.2f)\n", pointB.x, pointB.y);


    //distances entre les points
    float distance = distancePoints(pointA, pointB);
    printf("\nDistance AB = %.2f\n", distance);

    return 0;
}

