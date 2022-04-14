//SHORTING
#include"stdio.h"
main(){
	int n, i, j, a[20], x;
	printf("Enter N: \n");
	scanf("%d", &n);

	printf("Enter %d integers\n",n );

	for(i=0; i<n; ++i){
		scanf("%d\n", &a[i]);
	}
	for(i=0; i<n; ++i){
		for(j=i+1; j<n; ++j){
			if(a[i]>a[j]){
				x=a[i];
				a[i]=a[j];
				a[j]=x;
			}
		}
	}

	printf("Values after shorting\n");
	for (int i = 0; i < n; ++i){
		printf("%d, ",a[i] );
	}
	printf("\n");
}
