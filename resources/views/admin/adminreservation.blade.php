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



    <div style="position: relative; top: 70px; right: -150px;">

        <table bgcolor="black" style="border: 2px solid teal; width: 850px;">
            <tr align="center">
                <th style="padding: 20px"><h2>Name</h2></th>
                <th style="padding: 20px"><h2>Email</h2></th>
                <th style="padding: 20px"><h2>Phone</h2></th>
                <th style="padding: 20px"><h2>Guest</h2></th>
                <th style="padding: 20px"><h2>Date</h2></th>
                <th style="padding: 20px"><h2>Time</h2></th>
                <th style="padding: 20px"><h2>Message</h2></th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->guest}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>
            </tr>
            @endforeach
        </table>

    </div>


   </div>

    @include("admin.adminscript")
  </body>
</html>