<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($slug)
    {
          $page = \TCG\Voyager\Models\Page::where('slug', $slug)->firstOrFail();

          return view('page.show', compact('page'));
    }
}
