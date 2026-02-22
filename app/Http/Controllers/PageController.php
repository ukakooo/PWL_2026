<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'My name is Giganotosaurus and my ID is 123';
    }

    public function id ($id = 'none') {
        return 'Article with ID: ' . $id;
    }
}
