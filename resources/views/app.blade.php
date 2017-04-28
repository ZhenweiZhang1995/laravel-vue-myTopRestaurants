<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rate Restaurants</title>
    </head>
    <body>

        <div id="app"></div>


        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- <link rel="stylesheet" href="/css/master.css" media="screen" title="no title"> -->
        <!-- <link rel="stylesheet" href="/css/hero.css" media="screen" title="no title"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" charset="utf-8"></script>
        <script src="js/map.js"> </script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
