<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        body {
      background-image: url("{{ asset('/images/gambar 1.jpg')}}");
    }
        .btn {
           
            padding: 10px ;
            width: 150px;
            font-size: 20px;
            font-weight: bold;
            color: black; 
           
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>HALLO GUYS!</h1>
            </div>
        </div>
    <div class="position-absolute top-50 start-50 translate-middle"><br /> <br /> <br /><br /><br /><br /><br />
        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true">click here!
    
            </i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>