#include "..\includes\calc.h"
#include "..\includes\pile.h"
#include "..\unity\unity.h"

#define DIM 100

static char erreur[DIM];
static char expression[DIM];

void setUp(void)
{ // appel�e avant chaque test
    strcpy(erreur, "");
}

void test_addition()
{
    // � compl�ter
}

void test_soustraction()
{
    // � compl�ter
}

void test_multiplication()
{
        // � compl�ter
}

void test_division()
{
        // � compl�ter
}

void test_division_par_zero()
{
        // � compl�ter
}

void test_plusieurs_operations()
{
        // � compl�ter
}

void test_expression_incorrecte()
{
        // � compl�ter
}

void test_expression_vide()
{
        // � compl�ter
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