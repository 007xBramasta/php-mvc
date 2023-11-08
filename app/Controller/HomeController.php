<?php 

namespace Bramasta\Belajar\PHP\MVC\Controller;
use Bramasta\Belajar\PHP\MVC\App\View;

class HomeController
{

    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Programmer Zaman Now"
        ];
        
        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Bramasta Albatio Haryono";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
        //kirimkan response nya ke view
    }
}
 