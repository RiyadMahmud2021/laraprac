<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src={{asset('js/custom.js')}}></script>
</head>
<body> 
    <div class="container p-5"> 

        <form action="{{url('/add_data')}}" method="POST" class="form">
            @csrf <!--  why csrf??? -->
            Name: <input class='form-control' type="text" name="name"  id="name" value="<?php //echo !empty($grp['name']) ? $grp['name']: '';?>"> 
            <br/>  <br/>
            <!-- @error('name')
            <span class='text-danger'>{{$message}}</span>
            @enderror  -->
            
            Class: <input class='form-control' type="text" name="class"  id="class" value="<?php //echo !empty($grp['name']) ? $grp['name']: '';?>"> 
                <br/>  <br/>
            
            Roll: <input class='form-control' type="text" name="roll" id="roll" value="<?php //echo !empty($grp['description']) ? $grp['description']: '';?>">
            
            <!-- @error('email')
            <span class='text-danger'>{{$message}}</span> // default and custom msg setting   -->
            <!-- @enderror  -->
            
                <br/>  <br/>
        
            <div class="text-center">     
                <input class='btn btn-success' type="submit" name="postSubmit" value="Submit">       
            </div>
        
        </form>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>



