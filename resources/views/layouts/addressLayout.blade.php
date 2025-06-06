<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Custom')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .osh-outline {
        background-color: #C8E6C9; 
      
        border-radius:10px;
        padding: 5px;
    }

    .osh-bg {
        background-color: #E8F5E9; 
         
        border-radius:10px;
        padding: 5px;
    }
</style>
<body>
    <div class="container-fluid vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-6">

                <div class="card shadow">
                    <div class="card-body" style="background-color: #C8E6C9;">
                        @yield('add-content')
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>