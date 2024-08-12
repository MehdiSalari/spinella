<?php


namespace App\Middlewares;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Router;



class AuthMiddleware implements IMiddleware {
    public function handle(Request $request): void 
    {
        // echo '<pre>';
        // var_dump($request);die;
        


        // If authentication failed, redirect request to user-login page.
        if(!isset($_SESSION['admin'])) {
            // $request->setRewriteUrl(url('login'));
            header('location:'.url('login'));
        }

    }
}