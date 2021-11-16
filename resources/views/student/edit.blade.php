<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method('put')
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" value="{{$student->first_name}}">
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" value="{{$student->last_name}}">
    <br>
    <input type="submit" value="Save">
    </form>
</body>
</html>