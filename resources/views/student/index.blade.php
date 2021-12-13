<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student list</h1>
    {{-- {{$students}} --}}
    <br>
    @foreach ($students as $student)
      {{$student->id}}
        {{$student->first_name}}
        {{$student->last_name}}
        {{$student->grade_id}}

        <br>
    @endforeach
    <table border="1">
    @foreach ($students as $student)
    <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->first_name}}</td>
    <td> {{$student->last_name}}</td> 
    <td> {{$student->grade_id}}</td> 
    <td> {{$student->grade->grade_name}}</td>

    <td><a href="{{route('students.show',$student->id)}}">show</a></td> 
    <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td> 
    <td><a href="#">Add Subject</a></td> 
    <td>

      <form action="{{route('students.destroy',$student->id)}}" method="post">
        @csrf
        @method('delete')
      <input type="submit" value="delete">
      </form>

     
    </td> 
    </tr>
  @endforeach
</table>
</body>
</html>