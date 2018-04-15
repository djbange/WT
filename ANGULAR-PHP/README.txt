1. This program was tested in xampp ( Apache Server and phpmyadmin )and it works perfect

Do the following in phpmyadmin:

1. Create db with name "angularjs"
2. Create table inside that db with name "insert_emp_info"
3. Make the followin4 4 columns inside that table
	i.   id ( primary key, auto increment )
	ii.  name 
	iii. email
	iv.  year
	v.   dob

The function mysqli_connect() takes the following parameters : mysqli_connect(server_name, user, password, dbname)

> Server name will be "localhost"
> user and password will change according to your phpmyadmin settings
> dbname is "angularjs"

Note: The program uses bootstrap, exam mai allow nahi karenge. To apna khud ka CSS file bana lo