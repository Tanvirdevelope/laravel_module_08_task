<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donald Trump";
        $age = "75";

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];
 
        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create a response with JSON data and set cookie
        $response = response()->json($data);
        $response->withCookie(cookie($cookieName, $cookieValue, time() + 60 * $minutes, $path, $domain, $secure, $httpOnly));

        // Return the response
        return $response;
    }
}
