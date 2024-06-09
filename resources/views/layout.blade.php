<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <style>
      * {
        font-family: Roboto, Arial;
      }
      .table-centered {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      table {
        width: 50%;
        text-align: left;
        border-spacing: 0;
      }
      th, td {
        padding: 5px 10px;
        border: 1px solid gray;
      }
      th {
        background-color: rgba(16, 83, 160, 0.795);
        color: white; 
      }
      .navbar{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        text-align: center;
      }
      .nav-btn {
        background-color: rgba(16, 83, 160, 0.795);
        color: white;
        text-decoration: none;
        padding: 10px;
        width: 10%;
        transition: 0.2s;
      }
      .nav-btn:hover {
        background-color: #0b3769;
      }
      .active {
        background-color: #0b3769;
      }

    </style>
  </head>
  <body>

    @include('partials.navbar')
    @yield('content')

  </body>
</html>