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
    <!-- query parameter -->
    bookPage: {{ $bookPage }}
    <!-- for loop -->
    <ul>
    @for($i = 0; $i < count($people); $i++)
      <li>Name: {{ $people[$i]['name'] }} | Age: {{ $people[$i]['age'] }} | Sex: 
      @if($people[$i]['sex'] == 'M')
        男
      @else
        女
      @endif
      </li>
    @endfor
    </ul>
    <!-- foreach -->
    <div>
      @foreach($people as $person)
        @if($loop->first)
          <p>---Start---</p>
        @endif
        {{ $loop->index }} Name: {{ $person['name'] }} <br/>
        @if($loop->last)
          <p>---End---</p>
        @endif
      @endforeach
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>