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
  <div id="layout" class="wrapper">
    <app-header></app-header>
    @yield('content')
    <app-footer></app-footer>
  </div>
  @yield('vue-app')
</body>
</html>