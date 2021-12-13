<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <form action="{{route('students.store')}}" method="post">
        @csrf
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname">
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname">


    <br>
    <label for="gradeId">Grade Name</label>

    <select name="gradeId" id="gradeId">
        @foreach ($grades as $grade)
        <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
    @endforeach
       
    </select>
    <br>
    <input type="submit" value="Save">
    </form>
</body>
</html>