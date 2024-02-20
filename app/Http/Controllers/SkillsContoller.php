<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        return view('Skills')
            ->with('Skills1', 'mag g-words')
            ->with('Skills2', 'matulog ng dalawang oras araw-araw')
            ->with('Skills3', 'tumapos ng series sa isang araw');
    }
}
?>