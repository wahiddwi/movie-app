<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index()
    {
        return Inertia::render('Tags/Index', [
            'tags' => Tag::paginate(5)
        ]);
    }

    public function create()
    {
        return Inertia::render('Tags/Create');
    }

    public function store()
    {
        Tag::create([
            'tag_name' => FacadesRequest::input('tagName'),
            'slug' => Str::slug(FacadesRequest::input('tagName')),
        ]);

        return Redirect::route('admin.tags.index')->with('flash.banner', 'Tag berhasil ditambahkan');
    }
}
