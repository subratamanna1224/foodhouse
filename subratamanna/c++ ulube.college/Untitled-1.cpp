#include"stdio.h"
long int fact(int n)
{
    int i,product=1;
    for (i=2; i<=n; ++i)
    product =product*i;//product*=i;
    return product;
}
main()
{
    int n,r;
    printf("Enter n and r:");
    scanf("%d%d",&n,&r);
    if(n<r)
     printf("%dc4%d is not possible\n",n,r);
    else
     printf("%dc%d=%ld\n",n,r,fact(n)/(fact(r)*fact(n-r)));

}