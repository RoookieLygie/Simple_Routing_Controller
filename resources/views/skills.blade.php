<a href="/about-me"><button>About Me</button></a>
<a href="/skills"><button>Skills</button></a>
<a href="/hobbies"><button>Hobbies</button></a>

<h1>Skills</h1>

<h2>Programming Languages:</h2>
<ul>
    @foreach($skillsData['languages'] as $language)
        <li>{{ $language }}</li>
    @endforeach
</ul>

<h2>Frameworks:</h2>
<ul>
    @foreach($skillsData['frameworks'] as $framework)
        <li>{{ $framework }}</li>
    @endforeach
</ul>

<h2>Other Skills:</h2>
<ul>
    @foreach($skillsData['other_skills'] as $skill)
        <li>{{ $skill }}</li>
    @endforeach
</ul>

