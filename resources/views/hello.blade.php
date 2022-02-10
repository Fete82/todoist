<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- App styles -->
    <link rel="stylesheet" href="app.css">

</head>
        <!-- Laravel Lesson 1-->



        <!-- Two ways to print out variables from routes -->
        <!-- <h2><?php echo $title; ?></h2> -->
        <!-- or... -->
        @extends('layouts/app')

        @section('content')
        <div class="header">
            <h2>{{ $title }}</h2>
            <h1><i class="bi bi-twitch"></i></h1>
        </div>
        <!-- Pretty cool stuff! -->
        <p> {{ $content }}
        <h2><i class="bi bi-shield-shaded"></i></h2>
        </p>
        <!-- LOOP -->

        @forelse ($todos as $todo)
            <p>DATA EXISTS</p>
            
        @empty
            <p>NO DATA</p>
        @endforelse

        @unless (count($todos) > 0)
            <p>
                Print it</p>
        @endunless
            <p>
                No print</p>
        @if(count($todos) > 0)
        <ul>
            @foreach($todos as $todo)
            <li>>{{ $todo }}</li>
            @endforeach
        </ul>
        @else
            <p>Nope</p>
        @endif
        @endsection
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>