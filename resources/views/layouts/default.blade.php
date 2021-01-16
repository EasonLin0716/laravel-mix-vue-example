<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="/css/app.css" rel="stylesheet"></link>
  <style>
    h1 {
      color: red;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    @yield('content')
    <p>-------------</p>
    @yield('content2')
  </div>
</body>
</html>