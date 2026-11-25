<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SneatPageController extends Controller
{
    public function show(string $page): View
    {
        $cleanPage = basename($page, '.html');

        if ($cleanPage === 'dashboards-analytics' || $cleanPage === 'index') {
            return view('welcome');
        }

        if ($cleanPage === 'app-ecommerce-product-list') {
            return view('ecommerce.product-list');
        }

        if (view()->exists('sneat.pages.'.$cleanPage)) {
            return view('sneat.pages.'.$cleanPage);
        }

        abort(404);
    }
}
