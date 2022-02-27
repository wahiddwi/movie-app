<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index()
    {
        return Inertia::render('Tags/Index');
    }

    public function create()
    {
        return Inertia::render('Tags/Create');
    }
}
