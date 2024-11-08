<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Return a list of products
        return response()->json([
            ['name' => 'Product 1 z servera'],
            ['name' => 'Product 2'],
            ['name' => 'Product 3'],
        ]);
    }
}