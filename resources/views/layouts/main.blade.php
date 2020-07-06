<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <livewire:styles>

    <style>
        .container-fluid{
            padding-left: 0;
            padding-right: 0;
            margin-left: 0;
            margin-right: 0;
        }
        ul{
          list-style-type: none;
          padding-left: 0;
        }
        ul li{
          padding-left: 0;
        }



    </style>
</head>
<body>
    <div class="container-fluid fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-uppercase" href="#">Movies</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Movies<span class="sr-only">(current)</span></a>
                </li>

              </ul>

              <livewire:search-dropdown>

            </div>
          </nav>
    </div>

    <div class="container-fluid  bg-secondary" style="margin-top: 3rem">

       @yield('content')

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $('#modal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
      })

    $('#myModal').on('hidden.bs.modal', function () {
        callPlayer('video', 'stopVideo');
    });

    </script>
    <livewire:scripts>
</body>
</html>
