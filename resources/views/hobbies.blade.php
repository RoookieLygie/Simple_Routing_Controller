<a href="/about-me"><button>About Me</button></a>
<a href="/skills"><button>Skills</button></a>
<a href="/hobbies"><button>Hobbies</button></a>

<h1>Hobbies</h1>

<h2>My Hobbies:</h2>
<ul>
    @foreach($hobbiesData['hobbies'] as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</ul>

