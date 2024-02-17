<?php



namespace App\Http\Controllers;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutMeData = [
            'name' => "Ma. Lyzza Joy Patacsil",
            'age' => "21",
            'email' => "lyzzapatacsil109@gmail.com",
            'address' => "109 Brookspoint Purok 3 Aurora Hill, Baguio City",
            'short_description' => "Hello, I'm Ma. Lyzza Joy Patacsil, and I was born on December 9, 2002. I am currently enrolled at the University of the Cordilleras, pursuing a degree in Bachelor of Science in Information Technology with a major in Web Technology. My academic journey is centered around my passion for web development. I am dedicated to acquiring knowledge and skills to make meaningful contributions to the dynamic field of technology. As I aspire to become a professional in web technology, my commitment lies in continuous learning and growth throughout my academic and professional endeavors."
        ];

        return view('about_me', compact('aboutMeData'));
    }
}