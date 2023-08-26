<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database;
use PDO;

class DatabaseController extends Controller
{



    public function __construct()
    {

        $connection= new PDO("mysql:host=localhost;dbname=laravel_projects_db","root","");;

    }

    public function doctors()
    {

            $database = new Database();
            $result = $database->RunDml("");

            // Process the $result as needed

            return view('admin.employees.index');

    }

}
