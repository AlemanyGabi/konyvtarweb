<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Genre</title>
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
        
    <h2>New Genre</h2>
    <form action="{{route('book.store')}}" method="post">
    @csrf
    <label for="ganre_id">Ganre id:</label>
        <input type="text" id="ganre_id" name="ganre_id"> <br>
        <label for="ganre">new Genre:</label>
        <input type="text" id="ganre" name="ganre"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>