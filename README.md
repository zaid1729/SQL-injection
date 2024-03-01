# SQL-injection
 A SQL injection attack consists of insertion or “injection” of a SQL query via the input data from the client to the application.

# A small demonstration
  Let's take for example this small Login page : 
  
   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/7c1b92bc-418c-4fbc-8f85-aeeabcf3f84c)

  the username is "admin" and the password is "pass". So the output should be like that :  

   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/849357a1-63b9-4318-a62d-63b5766ea9f3)

   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/3b4f4829-1e72-4efb-a73f-9b80aa31c12e)

# The exploit 

   A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete). So it's all about inject some type of inputs.

   Let's take for example this input :  
             
     1' OR '1'='1

   Which means :
      
     SELECT * FROM personne WHERE  user = '1' OR '1'='1' and mot_de_passe = '1' OR '1'='1'


   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/841c5405-e32d-458b-b671-00f50f09309d)


   when i execute the Query above this will happen : 

   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/4b51b30e-99d5-4ef4-ba5e-bd21962a03eb)



# Prevent SQL injection


   when we replace on the PHP code the statment : 

    $username = $_POST["username"];
    $password = $_POST["password"];
      


   by this : 

    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);





   This will be the output of the previous SQL injection input : 


   ![image](https://github.com/zaid1729/SQL-injection/assets/107809533/e28d1f1e-5af7-4669-9444-42a31dcb3e63)




   Successfully escaping from SQL injection.







   




     
      




      


