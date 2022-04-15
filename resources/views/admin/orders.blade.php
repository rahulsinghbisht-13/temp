<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KlassyCafe - Restaurant</title>
</head>
<body>
  
</body>
</html>

<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")

    <div class="container">
    <form action="{{url('/search')}}" method="get" style="margin-left: 30px; margin-top: 20px; margin-bottom: 30px;">
        @csrf
        <input type="text" name="search" style="color: blue; width: 400px;">
        <input type="submit" value="Search" class="btn btn-success" style="padding: 15px;">
    </form>
    
    <table style="border: 2px solid teal; background-color: black; margin-left: 30px;">

        <tr align="center">
            <th style="padding: 30px;">Name</th>
            <th style="padding: 30px;">Phone</th>
            <th style="padding: 30px;">Address</th>
            <th style="padding: 30px;">Food Name</th>
            <th style="padding: 30px;">Price(&#8377;)</th>
            <th style="padding: 30px;">Quantity</th>
            <th style="padding: 30px;">Total Price(&#8377;)</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>&#8377;{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>&#8377;{{$data->price * $data->quantity}}</td>
        </tr>
        @endforeach


    </table>
    </div>
   </div>

    @include("admin.adminscript")
  </body>
</html>