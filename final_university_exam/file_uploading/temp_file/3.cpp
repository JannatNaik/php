//2. Write a program to perform following operations on a queue using array and linked list
//1. Insert
//2. Delete
//3. ISFULL
//4. ISEMPTY

#include<iostream>
using namespace std;
#define max 10
class q{
	int qu[max];
	int front = -1;
	int rear = -1;
	public:
		int eq(int data)
		{
			if(isfull())
	        {
	          cout<<"stack is overflaw!";	
			}		
			
			else
			{
				if(front == -1)
				{
					front = 0;
				}
				rear++;
				qu[rear] = data;
			    cout<<endl<<"enter add : "<<qu[rear];
			}
			 
		}
		isfull()
		{
			return rear == max - 1;
		}
		int dq()
		{
		     if(isempty())
			{
			cout<<"stack underflow";
				
			}
			else
			{
				cout<<endl<<"dq : "<<qu[front];
				front++;
			}	
		}	
		isempty()
		{
			return front == -1 || front > rear;
		}
		display()
		{
			if(front == -1)
			{
				cout<<"quew is empty";
			}
			else
			{
			for(int i= front;i<=rear;i++)
			{
				cout<<endl<<qu[i];
			}
		    }
		}	
};
int main()
{
	q q1;
	q1.eq(1);
	q1.eq(2);
		q1.eq(3);
			q1.eq(4);
	q1.eq(5);
	q1.dq();
	q1.dq();
q1.display();
}