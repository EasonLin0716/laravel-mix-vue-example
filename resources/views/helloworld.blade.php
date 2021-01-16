<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>大大安安</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <div id="app">
    </div>
    <p>{{ $name1 }} - {{ $age1 }} - {{ $sex1 }}</p>
    @if($sex1 == 'M')
      <p>He is a man</p>
    @elseif($sex1 == 'F')
      <p>He is a woman</p>
    @endif
    <!-- unless = if(falsy) then ... -->
    @unless($age1 > 13)
      <p>This person is under 13</p>
    @endunless
    <p>{{ $name2 }} - {{ $age2 }} - {{ $sex2 }}</p>
    @if($sex2 == 'M')
      <p>He is a man</p>
    @elseif($sex2 == 'F')
      <p>She is a woman</p>
    @endif
    @unless($age2 > 13)
      <p>This person is under 13</p>
    @endunless
    <!-- some regular php -->
    @php
      $animal = 'dog';
      echo($animal);
    @endphp
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>