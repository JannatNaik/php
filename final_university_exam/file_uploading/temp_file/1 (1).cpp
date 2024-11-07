//1. Write a program to perform following operations on a stack using array and linked list
//1. PUSH
//2. POP
//3. PEEK
//4. ISFULL
//5. ISEMPTY

#include<iostream>
using namespace std;
#define max 3
class stack{
	int arr[max];
	int top;
	public:
		stack()
		{
			top = -1;
		}
		int push(int value)
		{
			if(isfull())
			{
				cout<<"stack is overflow!";
				return 0;
			}
			top = top + 1;
			arr[top] = value;
			
			cout<<arr[top]<<endl;
		}
		isfull()
		{
			return top == 3 - 1;
		}
		int pop()
		{
			cout<<endl;
		    if(isempty())
			{
				cout<<"stack is underflow first enter element !";
					return 0;
			}
			cout<<arr[top]<<"is pop";
			top = top - 1; 
		}
		isempty()
		{
				return top == -1;
		}
		peek()
		{
			if(isempty())
			{
				cout << "Stack is empty." << endl;
                return -1;
			}
			cout<<"peek : "<<arr[top];
		}
};
int main()
{
	stack s;
	s.push(1);
	s.push(2);
	s.push(3);
	s.push(4);
	
	cout<<"\n **********\n";
	
	s.pop();
	s.pop();
	s.pop();
    s.pop();
	
	cout<<"\n **********\n";
	s.push(100);
	s.peek();
}


