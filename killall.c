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
                fprintf(mtrA,"0\n");
                fprintf(mtrB,"0\n");
                fprintf(mtrC,"0\n");
                fprintf(mtrD,"0\n");
                fprintf(mtrE,"0\n");
                fprintf(mtrF,"0\n");
                fprintf(LEDr,"0\n");
                fprintf(LEDg,"0\n");
                fprintf(LEDb,"0\n");
                fprintf(LEDy,"0\n");
                fprintf(bzz,"0\n");

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
