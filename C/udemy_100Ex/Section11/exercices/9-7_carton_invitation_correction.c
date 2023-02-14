#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define TAILLE_NOM 50
#define TAILLE_LISTE 5
#define AGE_MAX 15

typedef struct INVITE
{
    char nom[TAILLE_NOM];
    int age;
}Invite;


void filtrerInvites(Invite invites[], int* nb, int age_max);
void envoyerInvitation(Invite invites[], int nb);


int main()
{
	Invite invites[TAILLE_LISTE]=
	{
        {"Marc", 14},
        {"Arnaud", 32},
        {"Laura", 6},
        {"Julie", 16},
        {"Julien", 9}
	};

    // Selection des invites
    int nb_invites = TAILLE_LISTE;
    filtrerInvites(invites, &nb_invites, AGE_MAX);
    envoyerInvitation(invites, nb_invites);

	return 0;
}


void envoyerInvitation(Invite invites[], int nb)
{
    printf("Il y a %d invites:\n", nb);
	for(int i=0; i<nb; i++)
        printf("\t%s %d ans est invite a mon aniv !!!\n", invites[i].nom, invites[i].age);
}

void filtrerInvites(Invite invites[], int* nb, int age_max)
{
    for(int i=0; i<*nb; i++)
    {
        if(invites[i].age > age_max)
        {
            for(int j=i+1; j<*nb; j++)
            {
                strcpy(invites[j-1].nom, invites[j].nom);
                invites[j-1].age = invites[j].age;
            }
            (*nb)--;
            i--;
        }
    }
}
