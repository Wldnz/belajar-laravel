<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    @if (empty($student))
        @foreach ($students as $student)
    
            Helloo {{$student->name}} <br>

        @endforeach
    @else
        Halo {{$student->name}}, Welcome to our Website
    @endif
   
</body>
</html>