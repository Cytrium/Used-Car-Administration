#include<iostream>
using namespace std;

int main()
{
	int num1,num2,num3,num4;
	cout<<"Enter the first number: ";
	cin>>num1;
	cout<<"Enter the second number: ";
	cin>>num2
	cout<<"Enter the third number: ";
	cin>>num3;
	cout<<"Enter the fourth number: ";
	cin>>num4;
	
	int total = num1 + num2 + num3 + num4;
	//cout<<"\nTotal = "<<total<<endl;
	
	float average = (float) total / 4.0; //casting
	cout<<"\nAverage = "<<average<<endl;
}