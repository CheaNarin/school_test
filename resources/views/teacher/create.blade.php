@extends('layout.app');
@section('title','Add Teacher');
@section('content')
    
<form enctype="multipart/form-data"  method="POST" class="card px-5 py-4 w-75" action="{{ route('teacher.store') }}">
    @csrf
    <div class="text-center text-primary fs-1">Add Teacher</div>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Teacher ID</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="teacher_id" placeholder="" required>
</div>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">First Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="first_name" placeholder="enter name of products" required>
</div>

<div class="mb-3">
  <label for="price" class="form-label">Last Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="last_name" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Gender</label>
    <select name="gender"  class="form-control" id="formGroupExampleInput2">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    </div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Hire Date</label>
  <input type="date" class="form-control" id="formGroupExampleInput2" name="hire_date" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Phone</label>
  <input type="number" class="form-control" id="formGroupExampleInput2" name="phone" required>
</div>
<div class="mb-3">
<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Address</label>
  <input type="text "  class="form-control" id="formGroupExampleInput2" name="address" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Email</label>
  <input type="email"  class="form-control" id="formGroupExampleInput2" name="email" required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Photo</label>
  <input type="file" accept="image/*"  class="form-control" id="formGroupExampleInput2" name="image" required>
</div>
<div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancel</a> 
   
</div>
</form>

@endsection
