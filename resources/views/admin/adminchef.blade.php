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
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="margin-bottom: 10px;">
                <label for="titnamele"><h4>Name: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px;" type="text" name="name" placeholder="Enter chef's name" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="price"><h4>Speciality: </h4></label>
                <input style="color: blue; border-radius: 10px; width: 500px;" type="text" name="speciality" placeholder="Enter chef's speciality" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="image"><h4>Image: </h4></label>
                <input type="file" name="image" required>
            </div>

            <input style="margin-bottom: 30px; border: 3px solid blue; border-radius: 10px; padding: 5px; width: 100px;" type="submit" value="Save">
        </form>


        <table bgcolor="black" style="border: 2px solid teal; width: 800px;">
          <tr align="center">
            <th style="padding: 20px"><h3>Chef's Name</h2></th>
            <th style="padding: 20px"><h3>Speciality</h2></th>
            <th style="padding: 20px"><h3>Image</h2></th>
            <th style="padding: 20px"><h3>Action</h2></th>
            <th style="padding: 20px"><h3>Edit</h2></th>
          </tr>
          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img style="height: 200px; width: 200px;" src="/chefimage/{{$data->image}}"></td>
            <td><a style="color: red;" href="{{url('/deletechef', $data->id)}}">Delete</a></td>
            <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
          </tr>
          @endforeach
        </table>
        <div style="margin-bottom: 150px;"></div>
    </div>

    @include("admin.adminscript")
  </body>
</html>