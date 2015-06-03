#include <stdio.h>
int main (){
	int a,i,j,k, d=0;
	int array[9];
	int arrayprim[9];
	int arrayprimos[9];
	int sum[3];

for(k=0;k<3;k++){
	for(i=0;i<=9;i++){
		scanf("%d", &array[i]);
	}

	for(i=0;i<=9;i++){
		d=0;
		for(j=1;j<=array[i];j++){
			if(array[i]%j==0){
				d++;
			}
		}
		arrayprim[i]=d;
		if(arrayprim[i]==2)
			arrayprimos[i]=array[i];
		else
			arrayprimos[i]=3;
	}


	for(i=0;i<=9;i++){
		if(arrayprimos[i] != 3)
			sum[k]+=arrayprimos[i];
	}
}

for(k=0;k<3;k++){
	if(sum[k]==151)
		printf("SherUnlocked\n");
	else
		printf("Sherlocked\n");
}
return 0;
}
