<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New book</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    @if (session('success'))
        {{session('success')}}
    @endif
        
    <h2>New book</h2>
    <form action="{{route('booker.store')}}" method="post">
    @csrf
        <label for="car_model">title:</label>
        <input type="text" id="title" name="title"> <br>
        <label for="author">author:</label>
        <input type="text" id="author" name="author"> <br>
        <label for="km_price">ganre_id:</label> 
        <input type="text" id="ganre_id" name="ganre_id"> <br>
        <label for="release_date">release_date:</label>
        <input type="text" id="release_date" name="release_date"> <br>
        <button type="submit">Submit</button>
    </form>
    <button action="{{route('booking.go')}}"> </button>
</body>
</html>