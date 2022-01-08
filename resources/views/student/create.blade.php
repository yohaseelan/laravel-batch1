@extends('layouts.master')
@section('content')

    <form action="{{route('students.store')}}" method="post" id="student-create">
    
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" value="{{ old('fname') }}">
    @error('fname')
    <span style="color:red">{{ $message }}</span>
@enderror
    <br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname"  value="{{ old('lname') }}">
    @error('lname')
    <span style="color:red">{{ $message }}</span>
@enderror

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
    @push('script')
   <script>
       $(document).ready(function(){
            $('#student-create').submit(function(e){
               e.preventDefault();
               
               let urls=$('#student-create').attr('action');
                let fname=$("#fname").val();
                let lname=$("#lname").val();
                let gradeId=$("#gradeId").val();

               $.ajax({
                url:urls,
                data:{
                    fname:fname,
                    lname:lname,
                    gradeId:gradeId
                    },
                type:"POST",
                success:function(data){
                    alert(data.success);
                }

               });
               
            });


       });
       </script>
    @endpush
@endsection


