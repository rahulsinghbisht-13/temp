<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlassyCafe - Restaurant</title>
</head>
<body>
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

      <div style="position: relative; top: 60px; right: -150px">
          <table bgcolor="black" style="border: 2px solid teal; width: 800px;">
              <tr align="center">
                  <th style="padding: 30px"><h2>Name</h2></th>
                  <th style="padding: 30px"><h2>Email</h2></th>
                  <th style="padding: 30px"><h2>Action</h2></th>
              </tr>
              @foreach($data as $data)
              <tr align="center">
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>

                  @if($data->usertype=="0")
                  <td><a style="color: red;" href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                  @else
                  <td>Not Allowed</td>

                  @endif
              </tr>
              @endforeach
          </table>
      </div>
        
      </div>

      @include("admin.adminscript")
      </body>
    </html>
</body>
</html>