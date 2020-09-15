<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Wishlist</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .christmas_theme_font {
                font-family: 'Mountains of Christmas', cursive;
            }
            .content{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div class="content">
        <h1 class="christmas_theme_font">Create your christmas wishlist</h1>
        <a class="christmas_theme_font" href="{{route('home')}}">Maak wishlist</a>
        <br>
        <a class="christmas_theme_font" href="{{route('users')}}">Bekijk de wishlisten</a>
    </div>
    </body>
</html>
