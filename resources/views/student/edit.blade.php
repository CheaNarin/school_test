@extends('layout.app')
@section('title', 'Update Student')

@section('content')
<div class="container py-4">
    <form method="POST" action="{{ route('student.update', $student->id) }}" class="card px-5 py-4 w-75 mx-auto shadow-sm">
        @csrf
        @method('PUT')

        <div class="text-center text-primary fs-2 fw-bold mb-4">Update Student</div>

        {{-- Display Global Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Student ID --}}
        <div class="mb-3">
            <label for="student_id" class="form-label fw-semibold">Student ID</label>
            <input type="text" class="form-control" id="student_id" name="student_id" readonly value="{{ old('student_id', $student->student_id) }}">
        </div>

        {{-- First Name --}}
        <div class="mb-3">
            <label for="first_name" class="form-label fw-semibold">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" required value="{{ old('first_name', $student->first_name) }}">
        </div>

        {{-- Last Name --}}
        <div class="mb-3">
            <label for="last_name" class="form-label fw-semibold">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" required value="{{ old('last_name', $student->last_name) }}">
        </div>

        {{-- Gender --}}
        <div class="mb-3">
            <label for="gender" class="form-label fw-semibold">Gender</label>
            <select name="gender" class="form-control" id="gender" required>
                <option value="Male" @selected(old('gender', $student->gender) == 'Male')>Male</option>
                <option value="Female" @selected(old('gender', $student->gender) == 'Female')>Female</option>
            </select>
        </div>

        {{-- Date of Birth --}}
        <div class="mb-3">
            <label for="date_of_birth" class="form-label fw-semibold">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required value="{{ old('date_of_birth', \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d')) }}">
        </div>

        {{-- Phone --}}
        <div class="mb-3">
            <label for="phone" class="form-label fw-semibold">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required value="{{ old('phone', $student->phone) }}">
        </div>

        {{-- Address --}}
        <div class="mb-3">
            <label for="address" class="form-label fw-semibold">Address</label>
            <input type="text" class="form-control" id="address" name="address" required value="{{ old('address', $student->address) }}">
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email', $student->email) }}">
        </div>

        {{-- Submit / Cancel Actions --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-primary px-4">Update Student</button>
            <a href="{{ route('student.index') }}" class="btn btn-secondary px-4">Cancel</a> 
        </div>
    </form>
</div>
@endsection