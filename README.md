# Agfa Healthcare | Scheduling System 

# Manual

# Calendar View
![image](https://user-images.githubusercontent.com/78287397/204112848-4c66bac2-3b64-4126-b502-6a8655c489f8.png)
The Calendar View displays a week view of scheduling blocks. Clicking on each block takes a user to the courseList.php file which displays a table of courses associated with that date.

# Course List
![image](https://user-images.githubusercontent.com/78287397/204112986-f551b78a-5348-4399-aa7a-3edc2431d99c.png)
In the course view, all courses currently registered for the selected date are displayed alongside their time. There are two buttons available on this page: View and add. When selecting the view button, A user is brought to the Roster view, which displays a list of all customers currently registered for the course (roster.php). If the Add button is selected, A user is brought to the Add Customer page, which allows a user to add a new course to the calendar (addCustomer.php). The table which is queried to display courses is available in "course.sql" and is part of the "Agfa" database provided (Agfa.sql).

# Roster View
![image](https://user-images.githubusercontent.com/78287397/204113109-f312d533-1808-4f24-9af7-d9d66b38fef4.png)
While in the roster view (roster.php), A table of all customers associated with a specified course is displayed. Information about this customer such as their name, email and whether or not they have confirmed their attendance (when applicable) are available within this page. 

# Features Currently In Development
At present, features presented by the sidebar are still in development as it was a late addition to the project. We recently learned of our client's interest in including a menu for uploading documents provided by customers that they may need to sign, as well as a help menu to assist users in navigating the application. While we have included placeholder options for these features for demonstration purposes, we aim to implement them fully in the coming days. 

# Running the Application

To run this application from its source code, you must host it locally. To do this, you can download MAMP or XAMPP and start the MySQL and Apache services. For files that make use of a SQL database, you will need to change the username and password to match your settings on MAMP or XAMPP. By default, the username and password for MAMP is "root" "root" (see image below). For XAMPP, the default username is "root" while the password is left empty. 
![image](https://user-images.githubusercontent.com/78287397/204029399-0c7c01d0-aaeb-4b47-ade3-482a472b5ada.png)

Once these services are running/implemented, you can open the application by appending the port number used by MAMP/XAMPP to "localhost". By default, this is "localost:8888" on MAMP, or just "localhost" on XAMPP (see image below)
![image](https://user-images.githubusercontent.com/78287397/204029695-67834a45-efd0-49e9-a667-652274749d7b.png)

The SQL database/tables intended for use with this application are available within the repository and can be used by importing them with the phpmyadmin service. You can visit this service by appending "phpmyadmin5" to the end of your localhost url. Once within the service, you can use the import feature to import the SQL files provided, or create your own tables for use based on the structures provided in the images below. 

![image](https://user-images.githubusercontent.com/78287397/204030374-3ee393f8-0509-4787-91e3-63c956f2befa.png)
![image](https://user-images.githubusercontent.com/78287397/204030389-2940cb90-16ec-4133-b2fe-1c458995e381.png)
![image](https://user-images.githubusercontent.com/78287397/204030401-ecd58b21-672e-4a8c-9581-566b66f5dbf7.png)
![image](https://user-images.githubusercontent.com/78287397/204030407-fd1dbff0-0fd3-4bc3-84de-e7570053c6f4.png)

For further resources, reference the material provided in the project workbook at: 
https://docs.google.com/document/d/1gSIOwGvNkQu_f20Aufek7F0iJ0qn9zcMvKmNzMT0Isw/edit?usp=sharing

