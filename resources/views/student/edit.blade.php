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

    {{-- <label for="gradeId">Grade Name</label>

    <select name="gradeId" id="gradeId">

    @foreach ($grades as $grade)
        @if($grade->id==$student->grade_id)
        <option value="{{$grade->id}}" selected>{{$grade->grade_name}}</option> 
        @else
        <option value="{{$grade->id}}">{{$grade->grade_name}}</option>  
        @endif
    @endforeach
       
    </select>
    <br> --}}


    <label for="gradeId">Grade Name</label>

    <select name="gradeId" id="gradeId">

    @foreach ($grades as $grade)

    <option value="{{$grade->id}}" {{($grade->id==$student->grade_id)?'selected':''}}>{{$grade->grade_name}}</option> 
       
    @endforeach
       
    </select>
    <br>


    <input type="submit" value="Save">
    </form>
</body>
</html>