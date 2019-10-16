#include<iostream>
#include <math.h>
using namespace std;

class PTB2
{
	int a,b,c;
	float x1,x2;
	float denta;
public :
	PTB2(int a1=1,int b1=1,int c1=1)
	{
		a=a1;
		b=b1;
		c=c1;
	}
	PTB2(PTB2 &t)
	{
		a=t.a;
		b=t.b;
		c=t.c;
	}
	void nhap()
	{
		cout<< "Nhap a: ";
		cin>> a;
		cout<< "Nhap b: ";
		cin>> b;
		cout<< "Nhap c: ";
		cin>> c;
	}
		void xuat()
	{
		cout<<a <<"x^2"<<"+"<<b<<"x"<<"+"<<c<<"=0"<<endl;
	}
	void gpt()
	{
		if(a == 0)
		{
			cout<<"Nghiem phuong trinh: "<<(-c)/b<<endl;
		}
		if(a != 0)
		{	
			
			denta = b*b - 4*a*c;
			if(denta<0)
			{
				cout<<"pt vo nghiem";
			}
			else if(denta==0)
				cout<<"\n pt co nghiem kep x1 = x2 = "<<(-b)/(2*a);
			else
			{
				float t = sqrt(denta);
				x1 = (-b+t)/(2*a);
				x2 = (-b-t)/(2*a);
				cout<<" pt co nghiem x1 = "<<x1<<endl<<"x2 = "<<x2;
			}
		}
	}
};
int main()
{
	PTB2 d;
	d.nhap();
	d.xuat();
	d.gpt();
	system("pause");
}
