<?php

namespace App\Http\Controllers;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbiesData = [
            'hobbies' => [
                'Playing Video Games',
                'Doing Chores',
                'Cooking',
                'Watching K-Dramas',
                'Going to the Gym and Making it a Lifestyle'
            ],
        ];

        return view('hobbies', compact('hobbiesData'));
    }
}