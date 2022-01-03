<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{Session::get('username')}}
   <h1> {{$student->first_name }} {{$student->last_name}} 's Subject</h1>

   <form action="{{route('students.subjects.store',$student->id)}}" method="post">
@csrf

@foreach($subjects as $subject)
    <label for="{{$subject->id}}">
    <input type="checkbox" name="subject[]" id="{{$subject->id}}" value="{{$subject->id}}">{{$subject->subject_name}}
    </label>
    <br>
@endforeach
    <input type="submit">
</form>



</body>
</html>