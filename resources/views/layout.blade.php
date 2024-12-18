<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
</head>
<body>

    <h2 class="text-center mt-5">Welcome user, {{}}</h2>
    
    

    <div class="mt-5 container">
    <div class="text-end">
        <a href="{{{url("students/add")}}}" class="btn btn-primary">Adding Data</a>
    </div>
        @yield("content")
    </div>

</body>
</html>