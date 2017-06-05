/*
gcc docinfo.c -o docinfo
./docinfo 3000 20000 10 > docinfo.json

mongoimport -d organ -c docinfo --jsonArray docinfo.json
*/

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

char * firstName[] = {"Avinash", "Neha", "Sunil", "Swapnil", "Prithvi"};
char * lastName[] = {"Sharma", "Irnak", "Sonawane", "Dahawad", "Gupta"};
char * gender[] = {"male", "female"};
char * hospital[] = {"kem@gmail.com", "sahyadri@gmail.com", "vardaan@gmail.com"};
//char * domain[] = {"gmail.com"};

int getRandom(int size);

int main(int argc, char **argv)
{
	int n = atoi(argv[1]);					// no. of elements to be generated
	int start = atoi(argv[2]);				// start from this id
	int seed = atoi(argv[3]);				// seed value
//	char username[21] = "aaaaaa";
	int i, length = 6;
	char hack[100];
	
	srandom(seed);
	for(i = start; i < start + n; i++)
	{
		fprintf(stdout, "{\n");
	
		fprintf(stdout, "\t\"email\" : "); fprintf(stdout, "\"%d@%s\",\n", i, "gmail.com");
		fprintf(stdout, "\t\"password\" : "); fprintf(stdout, "\"%s\",\n", "1234");
//		fprintf(stdout, "\t\"info\" : {\n");
		fprintf(stdout, "\t\"firstname\" : "); fprintf(stdout, "\"%s\",\n", firstName[getRandom(sizeof(firstName)/sizeof(firstName[0]))]);
		fprintf(stdout, "\t\"middlename\" : "); fprintf(stdout, "\"%s\",\n", firstName[getRandom(sizeof(firstName)/sizeof(firstName[0]))]);
		fprintf(stdout, "\t\"lastname\" : "); fprintf(stdout, "\"%s\",\n", lastName[getRandom(sizeof(lastName)/sizeof(lastName[0]))]);
		fprintf(stdout, "\t\"gender\" : "); fprintf(stdout, "\"%s\",\n", gender[getRandom(sizeof(gender)/sizeof(gender[0]))]);
//		fprintf(stdout, "\t},\n");
		fprintf(stdout, "\t\"status\" : "); fprintf(stdout, "\"%s\",\n", "confirmed");
		
		if(i < 21000)
			strcpy(hack, hospital[0]);
		else if(i < 22000)
			strcpy(hack, hospital[1]);
		else
			strcpy(hack, hospital[2]);

		fprintf(stdout, "\t\"Hos\" : "); fprintf(stdout, "\"%s\"\n", hack);

		fprintf(stdout, "}\n");
	}
	return 0;
}

int getRandom(int size)
{
	return random() % size;
}
