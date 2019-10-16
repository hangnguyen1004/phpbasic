#include <stdio.h>

 
int main()
{
    int a, b;
    int sum = 0;
    int s=0;
 
    printf("Nhap a = ");
    scanf("%d", &a);
 
    printf("Nhap b = ");
    scanf("%d", &b);
 
    if (a > b)
    {
        printf("Khong hop le!");
        return 0;
    }

    if (a % 2 != 0)
        a++;
 
    for(int i = a; i <= b; i+=1){
        sum += i;
    }
	
	printf("Sum = %d", sum);
}

