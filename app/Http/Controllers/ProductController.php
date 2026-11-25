<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of ecommerce products.
     */
    public function index(): View
    {
        return view('ecommerce.product-list');
    }
}
