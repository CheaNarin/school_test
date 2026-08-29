@extends('layout.app')
@section('title', 'Category List')
@section('content')
    <div class="container">

        <table border="2" class="table table-striped  text-center align-middle table-hover">

            <thead>
                <tr>
                    <div class="d-flex justify-content-between pt-2">
                        <div class="text-info">
                            <h1>Student information</h1>
                        </div>
                        <div>
                            <a href="{{ route('student.create') }}" class="btn btn-primary">+ Add New Category</a>
                        </div>
                    </div>
                </tr>
                <tr class="table table-dark">
                    <th> ID</th>

                    <th>Student ID</th>
                    <th>First Name </th>

                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($student as $stu)
                    <tr>


                        <td>{{ $stu->id }}</td>
                        <td>{{ $stu->student_id }}</td>
                        <td>{{ $stu->first_name }}</td>
                        <td>{{ $stu->last_name }} </td>
                        <td>{{ $stu->gender }}</td>
                        <td>{{ $stu->date_of_birth}}</td>
                        <td>{{ $stu->phone}}</td>
                        <td>{{ $stu->address }}</td>
                        <td>{{ $stu->email }}</td>
                        
                        <td class="d-flex justify-content-center align-items-center gap-2" style="height: 70px;">
                            <a href="{{ route('student.edit',$stu->id) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('student.destroy',$stu->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>


        </table>

     {{ $student->links() }}
    </div>

@endsection()