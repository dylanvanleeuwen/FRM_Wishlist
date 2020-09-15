<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Add Wish</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

<form action="{{route('addwishpost')}}" method="post">
    @csrf;
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input name="title" type="text" class="form-control" placeholder="title">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Description</label>
        <input name="description" type="text" class="form-control" placeholder="Description">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input name="price" type="text" class="form-control" placeholder="Price">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Product Link</label>
        <input name="product_link" type="text" class="form-control" placeholder="Product Link">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Image Link</label>
        <input name="image_link" type="text" class="form-control" placeholder="Image Link">
    </div>
    <div class="form-group">
        <input value="Add Wish" type="submit">
    </div>
</form>

</body>
</html>
