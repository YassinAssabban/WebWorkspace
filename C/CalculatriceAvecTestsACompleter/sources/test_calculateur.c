#include "..\includes\calc.h"
#include "..\includes\pile.h"
#include "..\unity\unity.h"

#define DIM 100

static char erreur[DIM];
static char expression[DIM];

void setUp(void)
{ // appelée avant chaque test
    strcpy(erreur, "");
}

void test_addition()
{
    // à compléter
}

void test_soustraction()
{
    // à compléter
}

void test_multiplication()
{
        // à compléter
}

void test_division()
{
        // à compléter
}

void test_division_par_zero()
{
        // à compléter
}

void test_plusieurs_operations()
{
        // à compléter
}

void test_expression_incorrecte()
{
        // à compléter
}

void test_expression_vide()
{
        // à compléter
}


int main()
{
    UNITY_BEGIN();
    RUN_TEST(test_addition);
    RUN_TEST(test_soustraction);
    RUN_TEST(test_multiplication);
    RUN_TEST(test_division);
    RUN_TEST(test_plusieurs_operations);
    RUN_TEST(test_division_par_zero);
    RUN_TEST(test_expression_incorrecte);
    RUN_TEST(test_expression_vide);
    UNITY_END();
    return 0;
}