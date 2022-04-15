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
    
    <div style="position: relative; top: 60px; right: -150px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="margin-bottom: 10px;">
                <label for="title"><h4>Title: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px;" type="text" name="title" placeholder="Please give a title" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="price"><h4>Price: </h4></label>
                <input style="color: blue; border-radius: 10px" type="number" name="price" placeholder="Please enter a price" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="image"><h4>Image: </h4></label>
                <input type="file" name="image" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="description"><h4>Description: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px; height: 100px;" type="text" name="description" placeholder="Please write a description" required>
            </div>

            <input style="margin-bottom: 10px; border: 3px solid blue; border-radius: 10px; padding: 5px; width: 100px;" type="submit" value="Save">
        </form>

        <div>
        <table bgcolor="black" style="margin-bottom: 100px; border: 2px solid teal;">
            <tr>
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">Price(&#8377;)</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Edit</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>&#8377;{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img style="height: 150px; width: 200px;" src="/foodimage/{{$data->image}}"</td>

                <td><a style="color: red;" href="{{url('/deletemenu', $data->id)}}">Delete</a></td>

                <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    </div>

    @include("admin.adminscript")
  </body>
</html>