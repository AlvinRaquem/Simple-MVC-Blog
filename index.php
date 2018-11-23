<?php
session_start();
// $httpMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

$rootfolder =  '/simpleblog';
$request = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : '';
$userlevel = isset($_SESSION['User_Level']) ? $_SESSION['User_Level'] : 'guest';


switch($userlevel){
    case 'guest':

        if(fnmatch('', $request)){
             require_once(__DIR__.'/app/controller/blog.php');
             $BlogController->index();
             break;
        }

        if(fnmatch($rootfolder.'/about', $request)){
            require_once('./view/about.php');
            break;
        }

        if(fnmatch($rootfolder.'/login', $request)){
            require_once('./view/login.php');
            break;
        }

        if(fnmatch($rootfolder.'/viewblog', $request)){
            require_once(__DIR__.'/app/controller/blog.php');
            $BlogController->viewBlog($_GET['idno']);
            break;
        }

        if(fnmatch($rootfolder.'/add', $request)){
            require_once('./view/add.php');
            break;
        }

        if(fnmatch($rootfolder.'/addblog', $request)){
            require_once(__DIR__.'/app/controller/blog.php');
            $BlogController->addBlog($_POST);
            break;
        }

        if(fnmatch($rootfolder.'/remove', $request)){
            require_once(__DIR__.'/app/controller/blog.php');
            $BlogController->removeBlog($_GET['idno']);
            break;
        }

        require __DIR__ . '/view/404.php';

    default:
    break;
}






