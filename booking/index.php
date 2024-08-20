<?php

    require "controller/BookingController.php";

    $booking=new project();
 

    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); 
    $method = $_SERVER["REQUEST_METHOD"];

    switch ($method) {
        case "POST":  
            if ($path == "/add") {
                $name = $_POST["name"];
                $bookingdate = $_POST["bookingdate"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $booking->add_person($name,$bookingdate,$address,$email);
                header("location: /");
                exit();

        }
        else  if ($path == "/update") {
            $name = $_POST["name"];
            $bookingdate = $_POST["bookingdate"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $id = $_POST["id"];
                $booking->update_person($name, $bookingdate, $address, $email,$id);
                header("location: list");
                
                exit();
          
        }
      
        break;
            case "GET":
           if($path=="/"){
                require "views/register.html";
            }
            
            else if($path=="/list"){
                $project=$booking->get_person();
                require "views/list.php";
            }
          
           
            else if($path=="/delete"){
                $id = $_GET["id"];
                $booking->delete_person($id);
                $project=$booking->get_person();
                header("Location: list");
                exit();
            }
          
            elseif($path=="/updated"){
                $id=$_GET["id"];
                $project=$booking->get_persons($id);
                require "views/update.php";  
                
            }
        
            

    }