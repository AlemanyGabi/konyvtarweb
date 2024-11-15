<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<style>
    td, th{
        padding: 15px;
        text-align: center;
    }
    td, th, table{
        border: 1px solid black;
        border-collapse: collapse;}
</style>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    @if (session('success'))
        {{session('success')}}
    @endif

    <table style="margin: auto">
        <tr>
            <th>title</th>
            <th>author</th>
            <th>release_date</th>
        </tr>
        @foreach ($libraries as $library)
            <tr>
                <form action="{{route('booking.go')}}" method="get">
                @csrf
                <td>{{$library->title}}</td>
                <td>{{$library->author}}</td>
                <td>{{$library->release_date}}</td>
                </form>
            </tr>
        @endforeach
    </table>
</body>
</html>