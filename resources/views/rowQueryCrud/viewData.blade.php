<!DOCTYPE html>
<html lang="en">
<head>
     <title>View</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/custom.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
     <div class='m-5'>
          <table class="table table-bordered">
               <thead >
                    <tr  class="text-center ">
                         <th class="border  ">ID</th>
                         <th class="border  ">Name</th>
                         <th class="border  ">Class</th>
                         <th class="border  ">Roll</th>
                         <th class="border  ">Action</th>
                    </tr>
               </thead>
               <tbody>
                    @if(!empty($showData))
                         @foreach($showData as $row)
                         <tr>
                              <td class="border "> {{$row->id}}    </td>
                              <td class="border "> {{$row->name}}  </td>
                              <td class="border "> {{$row->class}} </td>
                              <td class="border "> {{$row->roll}} </td>
                              <td class="border  text-center">
                              <a class="btn btn-light" href=""> View </a>
                              <a class="btn btn-warning " href="{{url('/editDataPage/'.$row->id)}}"> Edit </a>
                              <a class="btn btn-danger" href="{{url('/deleteData/'.$row->id)}}" onClick= "return confirm('Are you suru to delete?')">Delete</a>  
                              </td> 
                         </tr>
                         @endforeach 
                    @endif
               </tbody>
          </table>
     </div>
 

     <script src = "{{asset('js/bootstrap.min.js')}}"> </script>
     <script src = "{{asset('js/popper.min.js')}}"> </script>
     <script src = "{{asset('js/popper.min.js')}}"> </script>
     <script src = "{{asset('js/custom.js')}}"> </script>
</body>
</html>