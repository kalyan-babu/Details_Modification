# Details_Modification





                  I'm mainly focused on back end.                 

 
   please follow the steps while executing the files.

	dwonload the folder & file's  from given github link and place the folder in  "c drive>wamp>www>".


	Step 1: please create database called 'mishipay' in yout local host, and
	
		export the 'mishipay.sql' file in 'mishipay' database.
		
		Then you will find four tables 'users' table,'details' table, 'admin' table and 'orders' table. Don't change table names.


	
	Step 2: please verify your localhost connection from 'connection.php' file. if you have username and password please 

                modify the details  'servername','username','password','database_name'  in  'connection.file'.


	Step 3:  I have created two interfaces
                   
                   1) ADMIN   2)USER

		ADMIN
                        responsible for adding and deleting the database things.
		USER
			responsible for order the database things.



      
	step 4: open "MAIN.php" there u will find two links  " admin" and "user".

		I have created two admin accounts.
		
		1)    email :       mishipay@gmail.com	
		      password:     mishipay

                2)    email:        kalyan@gmail.com
		      password:     kalyan@11


		
	note:
              please, don't open any other files because everything was interconnected and session variables are created , 

	      if you open error's will come.



		For front-end I used bootstrap.
