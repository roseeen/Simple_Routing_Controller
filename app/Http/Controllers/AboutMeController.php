<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        return view('AboutMe')
            ->with('name', 'Neil Rosen Repato')
            ->with('age', 21)
            ->with('email', 'rneilrosen@gmail.com');
    }
}
?>
