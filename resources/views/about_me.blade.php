<!DOCTYPE html>
<html lang="en">
<head>
    <a href="{{ url('/about-me') }}"><button>About Me</button></a>
    <a href="{{ url('/skills') }}"><button>Skills</button></a>
    <a href="{{ url('/hobbies') }}"><button>Hobbies</button></a>
    <h1>About Me</h1>

    <p><strong>Name:</strong> {{ $aboutMeData['name'] }}</p>
    <p><strong>Age:</strong> {{ $aboutMeData['age'] }}</p>
    <p><strong>Email:</strong> {{ $aboutMeData['email'] }}</p>
    <p><strong>Address:</strong> {{ $aboutMeData['address'] }}</p>
    
    <p><strong>Short Description:</strong>
    {{ $aboutMeData['short_description'] }}</p>
    
</body>
</html>