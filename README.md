# SM23-Web04

## Temperature and humidity measurement website
![SM23-Web04site](https://github.com/iFatma2/SM23-Web04/assets/139279448/295386b5-02e7-451d-b3ec-9bff5c7752ee)




## Introduction
  The fourth and final task of the Web Development path pertains to the development of a website for measuring temperature and humidity. The data is then stored in a database, and the stored value can be retrieved from the database.
  
##  Used Software  
  
  - Visual Studio Code 
  - XAMPP

  ![file_type_vscode_icon_130084 (5)](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/297c7b00-6298-4c1a-bf8f-3cfdae15f9f4)
  ![xampp_94513 (2)](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/aa92840b-f3dc-405d-a898-cacc3aebd4b4)


  
 ## Frontend
  
  - HTML
  - CSS
    
  ![file_type_html_icon_130541](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/06e9261a-77f8-4b9a-8e2b-6cdf1c5957ba)
  ![file_type_css_icon_130661](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/3e958b07-b6d0-48be-9e87-1c7b961ab85e)



  ## Backend

  - PHP
  - MySQL
  - Java Script 

  ![file_type_php_icon_130266](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/7dab2a4e-5057-4b11-94cd-f3b42f9aa149)
  ![mysql_official_logo_icon_169938](https://github.com/iFatma2/SM32-WebProg01/assets/139279448/4e5e0eba-1c2d-4334-a2cf-e5e169297923)
  ![javascript_icon_130900](https://github.com/iFatma2/SM23-Web03/assets/139279448/8d9d4f08-3b81-4937-9af8-c50095cbb5a8)




  ## This task consists of three parts:
  - Create a web page that receives GET variables
  - Create a database to store these values.
  - Developing PHP code to retrieve the last database record
  
  ## Steps to complete the task
  
  1) Developing a website using HTML and CSS formatting.
  ***
  2) Run XAMPP server.
  ***
  3) Create Weather database in PhpMyAdmin.
     
  ![SM23-Web04DB](https://github.com/iFatma2/SM23-Web04/assets/139279448/138bacac-a6f9-4734-ace8-464d21eb944d)
  ***
  4) Create PHP code in order to:
  - store this data in the DB:
      ```
      if(isset($_GET['Save'])){
      
      // save value in $var
      $Temperature = $_GET['Temperature'];
      $Humidity = $_GET['Humidity'];
      
      
      
      $sql = "INSERT INTO Weather VALUES ('',$Temperature ,$Humidity)";
      mysqli_query($conn,$sql);
      echo "<script>alert('Data Successfully Added in DataBase *-* '); window.location = 'index.html';</script>";
      }
    ```
  - retrieve it from the database
    ```
    if(isset($_GET['Retrive'])){

    // Retrieve the Weather Data from the database
    $sql = "SELECT Temperature,Humidity FROM weather ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $Temperature = $row['Temperature'];
        $Humidity = $row['Humidity'];

        echo  "Temperature: ",$Temperature  ."<br>". "Humidity: ",$Humidity;
    } else {
        echo "<script>alert('There is no data in the database to recover. Try entering the data first'); window.location = 'index.html';</script>";
        
    }}
    ```
    ### Output of Retrieve Code
    ![SM23-Web04Rtrv](https://github.com/iFatma2/SM23-Web04/assets/139279448/4afd7c61-2206-4b6c-8fbb-0f5039e2796f)
    *******


  ## Testing Video 
  

https://github.com/iFatma2/SM23-Web04/assets/139279448/26218584-53ae-4106-9493-40c1a4c0b0b3


  
