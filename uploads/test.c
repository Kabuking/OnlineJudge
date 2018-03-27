#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main(){
	FILE *fp_test_case, *fp_answer, *fp_try;
	char answer[30],arg[30],check1[30],check2[30];
	int correct=1;
	fp_test_case = fopen("evenodd.txt","r");
	fp_try = fopen("try.txt","r");
	fp_answer = fopen("evenodd_ans.txt","r");
//	fgets(answer,0,fp_test_case);
	while(fscanf(fp_test_case,"%s",answer)!=EOF){
        //printf("%s",answer);
        sprintf(arg,"echo %s | a >> try.txt",answer);
        system(arg);
        system("echo & echo. >> try.txt");
	}
	while(fscanf(fp_try,"%s",check1)!=EOF){
		fscanf(fp_answer,"%s",check2);
		if(strcmp(check1,check2)!=0){
			correct=0;
			break;
		}
	}
	fclose(fp_try);
	FILE *file = fopen("try.txt", "w");
	fclose(file);
	fclose(fp_test_case);
	fclose(fp_answer);
	if(correct){
		printf("Correct output.");
		return 1;
	}
	else{
		printf("Incorrect output.");
		return 0;
	}

	return 66;
}

