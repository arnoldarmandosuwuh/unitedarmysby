<?php
session_start();
if (isset ($_GET['page'])){
    if(isset($_SESSION["username"]))
        $page=$_GET['page'];
    else
        $page="login";
}else{

    $page="";

}

switch($page){

        default:
        if(isset($_SESSION["username"])){
            if ($page == ""){
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "home/home.php";
             include "footer.php";
            }
            else{
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "blank.php";
             include "footer.php";   
            }
             
        }
        else {
             $title="Halaman Admin";
             include "header.php";
             include "login/login.php";
        }
        break; 

        case "home":
        if(isset($_SESSION["username"])){
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "home/home.php";
             include "footer.php";
        }
        else {
             $title="Halaman Admin";
             include "header.php";
             include "login/login.php";
        }
        break; 


        case "login":
             $title="Halaman Admin";
             include "header.php";
             include "login/login.php";
        
        break; 

        case "user":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "user/user.php";
             include "footer.php";
        
        break; 

        case "formuser":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "user/form_user.php";
             include "footer.php";
        
        break; 

        case "pgalery":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "galery/galery.php";
             include "footer.php";
        
        break; 

        case "pformgalery":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "galery/form_galery.php";
             include "footer.php";
        
        break; 

        case "vgalery":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "video/video.php";
             include "footer.php";
        
        break; 

        case "vformgalery":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "video/form_video.php";
             include "footer.php";
        
        break; 

        case "contact":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "contact/contact.php";
             include "footer.php";
        
        break; 

        case "formcontact":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "contact/form_contact.php";
             include "footer.php";
        
        break; 

        case "news":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "news/news.php";
             include "footer.php";
        
        break; 

        case "formnews":
             $title="Halaman Admin";
             include "header.php";
             include "navbar.php";
             include "sidebar.php";
             include "news/form_news.php";
             include "footer.php";
        
        break; 

    }

?>



