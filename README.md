EmeraldHeartLighthouseCollection
================================

Emerald Heart Lighthouse Collection Website

Load and Install the MAMP server, place the file named Emerald Heart Lighthouse Collection
File into the htdocs folder via this path...

	Applications
		MAMP
			htdocs
				Place file Emerald Heart Lighthouse Collection
				(Open with your designated browser)
				
For the database to be utilized there is one of two ways to do this...

1. open phpMyAdmin and log in (This can be utilized from the MAMP Welcome Screen)
   click on import
	a. File to import 
	b. click on browse (Find the Final Database File within the hand off packet located in the file named Final)
	c. click ok
	d. Partial Import: leave as is
	e. Format: leave as SQL
	f. Format-Specific Options (Leave as is)
	g. Click Go (Success is noted with a green check mark at the top of the file)
	

2. Import the file from the Final Site Database Files into your IDE database section using the below info.

connect_to_mysql.php
---------------------
$user = (username of database)
$pass = (password for database)
$db = new PDO(mysqlp:host= (serverhost name); dbname= "the database name")


NOTE: For Project Hand off Packet completed documentation for view, please go to
https://www.dropbox.com/sh/vqqy28byoryw6zl/AAAOcNWOEJyrUMcMoQymxejGa?dl=0

This Site displays all documentation and coding (week by week) that was done for this project, start to finish!

