#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main()
{
   // declaration de nos variables
   int nombre_mystere = 0, nombre_utilisateur = 0, nombre_tentatives = 0, saisie_utilisateur=0;
   const int VALEUR_MIN = 1, VALEUR_MAX = 100, MAX_TENTATIVES = 10;

   do
   {

       // generation d'un nombre aleatoire
       srand(time(NULL));
       nombre_mystere = (rand() % (VALEUR_MAX - VALEUR_MIN + 1)) + VALEUR_MIN;
       nombre_tentatives = 0;

       printf("Devinez quel est mon nombre mystere. Indice: c'est un nombre entre %d et %d \n", VALEUR_MIN, VALEUR_MAX);

       do
       {
           if(nombre_tentatives >= MAX_TENTATIVES)
           {
               printf("Dommage ! Le nombre mystere etait %d\n", nombre_mystere);
               break;
           }

          // saisie utilisateur
          scanf("%d", &nombre_utilisateur);
          nombre_tentatives++;

          // on compare le nombre utilisateur et le nombre mystere
          if(nombre_mystere > nombre_utilisateur)
          {
              printf("C'est plus!\n");
          }
          else if(nombre_mystere < nombre_utilisateur)
          {
              printf("C'est moins!\n");
          }
          else
          {
              printf("Bravo! le nombre mystere etait %d, vous l'avez trouve en %d tentatives\n", nombre_mystere, nombre_tentatives);
          }

       }
       while(nombre_utilisateur != nombre_mystere);

       printf("Voulez-vous faire une nouvelle partie (1-oui et 2-non) > ");
       scanf("%d", &saisie_utilisateur);

   }
   while(saisie_utilisateur != 2);


    printf("A bientot!");

    return 0;
}

