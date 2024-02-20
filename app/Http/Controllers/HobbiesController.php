<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        return view('Hobbies')
            ->with('Hobbies1', 'mag linis ng bahay')
            ->with('Hobbies2', 'mag hugas ng plato')
            ->with('Hobbies3', 'mag laba ng damit');
    }
}
?>
