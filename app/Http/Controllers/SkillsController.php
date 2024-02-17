<?php

namespace App\Http\Controllers;

class SkillsController extends Controller
{
    public function index()
    {
        $skillsData = [
            'languages' => ['PHP', 'JavaScript', 'Python'],
            'frameworks' => ['Laravel'],
            'other_skills' => ['HTML', 
                                'CSS',  
                                'Basic Design Skills', 
                                'Responsive Design']
        ];

        return view('skills', compact('skillsData'));
    }
}