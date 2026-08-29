@extends('layout.app')
@section('title','Add Teacher');
@section('content')
    
<form enctype="multipart/form-data"  method="POST" class="card px-5 py-4 w-75" action="{{ route('teacher.update',$teacher->id) }}">
    @csrf
    @method('PUT')
    <div class="text-center text-primary fs-1">Update Teacher</div>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Teacher ID</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="teacher_id" placeholder="" required value="{{ old('teacher_id', $teacher->teacher_id) }}">
</div>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">First Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="first_name" placeholder="enter name of products" required value="{{ old('first_name', $teacher->first_name) }}">
</div>

<div class="mb-3">
  <label for="price" class="form-label">Last Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="last_name" required value="{{ old('last_name', $teacher->last_name) }}">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Gender</label>
      <select name="gender" class="form-control" id="gender" required>
                <option value="Male" @selected(old('gender', $teacher->gender) == 'Male')>Male</option>
                <option value="Female" @selected(old('gender', $teacher->gender) == 'Female')>Female</option>
            </select>
    </div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Hire Date</label>
  <input type="date" class="form-control" id="formGroupExampleInput2" name="hire_date" required value="{{ old('hire_date', $teacher->hire_date) }}">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Phone</label>
  <input type="number" class="form-control" id="formGroupExampleInput2" name="phone" required value="{{ old('phpne', $teacher->phone) }}">
</div>
<div class="mb-3">
<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Address</label>
  <input type="text "  class="form-control" id="formGroupExampleInput2" name="address" required value="{{ old('address', $teacher->address) }}">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Email</label>
  <input type="email"  class="form-control" id="formGroupExampleInput2" name="email" required value="{{ old('email', $teacher->email) }}">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2"  class="form-label">Photo</label>
  <input type="file" accept="image/*"  class="form-control" id="formGroupExampleInput2" name="image" required value="{{ old('image', $teacher->image) }}">
</div>
<div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Cancel</a> 
   
</div>
</form>

@endsection
