<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Wishlist</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .content{
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Product List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <!-- List group-->
            <ul class="list-group shadow">
                <!-- list group item-->
                @foreach ($data as $user)
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h5 class="mt-0 font-weight-bold mb-2"></h5>
                                <p class="font-italic text-muted mb-0 small"></p>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <a href="{{route('wishlist', $user->id)}}" class="font-weight-bold my-2">{{$user->name}}</a>
                                    <ul class="list-inline small">
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End -->
                    </li> <!-- End -->
                @endforeach
            </ul> <!-- End -->
        </div>
    </div>
</div>

</body>
</html>
