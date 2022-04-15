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

  <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")



    <div style="position: relative; top: 60px; right: -150px;">
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="margin-bottom: 10px;">
                <label for="title"><h4>Title: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px;" type="text" name="title" value="{{$data->title}}" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="price"><h4>Price: </h4></label>
                <input style="color: blue; border-radius: 10px" type="number" name="price" value="{{$data->price}}" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="description"><h4>Description: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px; height: 100px;" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="image"><h4>Old Image: </h4></label>
                <img style="height: 200px; width: 200px;" src="/foodimage/{{$data->image}}">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="image"><h4>New Image: </h4></label>
                <input type="file" name="image" required>
            </div>

            <input style="margin-bottom: 10px; border: 3px solid blue; border-radius: 10px; padding: 5px; width: 200px; " type="submit" value="Update Food Item">
        </form>
        <div style="margin-bottom: 100px;"></div>
   </div>

    @include("admin.adminscript")
  </body>
</html>