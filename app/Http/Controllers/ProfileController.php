<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donal Trump";
        $age = "75";

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];
 
        // Set cookie variables
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

       // Set the cookie
       $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

       // Add the return statement with the response method along with $data and status-code and set the cookie stated in the question
       return response()->json($data)->cookie($cookie);
    }
}
