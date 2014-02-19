#include <stdio.h>

int main(){
	FILE *mtrA = fopen("/dev/talos/motorA/speed","r+");
	FILE *mtrB = fopen("/dev/talos/motorB/speed","r+");
	FILE *mtrC = fopen("/dev/talos/motorC/speed","r+");
	FILE *mtrD = fopen("/dev/talos/motorD/speed","r+");
	FILE *mtrE = fopen("/dev/talos/motorE/speed","r+");
	FILE *mtrF = fopen("/dev/talos/motorF/speed","r+");

	FILE *LEDr = fopen("/dev/talos/led/red","r+");
	FILE *LEDg = fopen("/dev/talos/led/green","r+");
	FILE *LEDb = fopen("/dev/talos/led/blue","r+");
	FILE *LEDy = fopen("/dev/talos/led/yellow","r+");

	FILE *bzz = fopen("/dev/talos/buzzer","r+");
	
	volatile int done = 0;
	int isZero = 1;

	do {
		done = 1;
		fprintf(mtrA,"0");
		fprintf(mtrB,"0");
		fprintf(mtrC,"0");
		fprintf(mtrD,"0");
		fprintf(mtrE,"0");
		fprintf(mtrF,"0");
		fprintf(LEDr,"0");
		fprintf(LEDg,"0");
		fprintf(LEDb,"0");
		fprintf(LEDy,"0");
		fprintf(bzz,"0");

		fscanf(mtrA,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(mtrB,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(mtrC,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(mtrD,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(mtrE,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(mtrF,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(LEDr,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(LEDg,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(LEDb,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(LEDy,"%d\n",&isZero);
		if(isZero){done = 0;}
		fscanf(bzz,"%d\n",&isZero);
		if(isZero){done = 0;}
	} while (!done);

	fclose(mtrA);
	fclose(mtrB);
	fclose(mtrC);
	fclose(mtrD);
	fclose(mtrE);
	fclose(mtrF);
	fclose(LEDr);
	fclose(LEDg);
	fclose(LEDb);
	fclose(LEDy);
	fclose(bzz);

	return 0;
}
