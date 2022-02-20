<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
        <title>@yield('title')</title>
        <script src="https://kit.fontawesome.com/e2b2982b1a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--        <a target="_blank" href="https://icons8.com/icon/_rqXa4OX9M2n/store-front">Store Front</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>--}}
    </head>

    <body>
        <div>
            <header class="text-center w-100 bg-primary">
                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
            </header>

            <main>
                @yield('content')
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{url('assets/js/delete/product.js')}}"></script>
        <script src="{{url('assets/js/delete/tag.js')}}"></script>
    </body>
</html>
