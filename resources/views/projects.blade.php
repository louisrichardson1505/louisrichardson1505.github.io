<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Projects</title>
  <link href="projects.css" rel="stylesheet">
</head>
<body>
  @include('components.nav-bar')
  <div class="container">
    <div class="project-card">
      <a class="project-link" href="#">
        <img src="500x200.png">
        <h2>Python Game</h2>
        <a>
    </div>
  </div>

{{-- ready for refactor --}}

  {{-- <div class="container">
    <div class="project-card">
      @foreach($project as $projects)
      <a class="project-link" href="{{$projects['url']}}">
        <img src="{{$projects['image']}}">
        <h2>{{$projects['title']}}</h2>
      </a>
      @endforeach
    </div>
  </div> --}}


</body>
</html>
