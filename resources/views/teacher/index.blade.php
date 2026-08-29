@extends('layout.app')

@section('title', 'Teacher List')

@section('content')

<div class="container py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold text-dark mb-1">
                Teacher Information
            </h1>

            <p class="text-secondary mb-0">
                Manage teacher information
            </p>
        </div>

        <a href="{{ route('teacher.create') }}"
           class="btn btn-primary px-4 py-2">
            + Add New Teacher
        </a>

    </div>


    {{-- Teacher Cards --}}
    <div class="row g-4">

        @forelse ($teacher as $cher)

            <div class="col-xl-4 col-lg-6 col-md-6">

                <div class="card h-100 border-0 shadow-sm">

                    {{-- Card Top --}}
                    <div class="bg-primary p-3 text-white">

                        <div class="d-flex align-items-center">

                            {{-- Image --}}
                            @if ($cher->image)

                                <img
                                    src="{{ asset('storage/' . $cher->image) }}"
                                    alt="Teacher Image"
                                    class="rounded-circle border border-3 border-white"
                                    width="75"
                                    height="75"
                                    style="object-fit: cover;"
                                >

                            @else

                                <div
                                    class="rounded-circle bg-white text-primary d-flex justify-content-center align-items-center fw-bold"
                                    style="width:75px;height:75px;"
                                >
                                    {{ strtoupper(substr($cher->first_name, 0, 1)) }}
                                </div>

                            @endif


                            {{-- Name --}}
                            <div class="ms-3">

                                <h4 class="mb-1 fw-bold">
                                    {{ $cher->first_name }}
                                    {{ $cher->last_name }}
                                </h4>

                                <small>
                                    Teacher ID: {{ $cher->teacher_id }}
                                </small>

                            </div>

                        </div>

                    </div>


                    {{-- Card Body --}}
                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-6">
                                <small class="text-secondary">
                                    Gender
                                </small>

                                <div class="fw-semibold text-dark">
                                    {{ $cher->gender }}
                                </div>
                            </div>


                            <div class="col-6">
                                <small class="text-secondary">
                                    Hire Date
                                </small>

                                <div class="fw-semibold text-dark">
                                    {{ $cher->hire_date }}
                                </div>
                            </div>


                            <div class="col-12">
                                <small class="text-secondary">
                                    Phone
                                </small>

                                <div class="fw-semibold text-dark">
                                    {{ $cher->phone }}
                                </div>
                            </div>


                            <div class="col-12">
                                <small class="text-secondary">
                                    Email
                                </small>

                                <div class="fw-semibold text-dark">
                                    {{ $cher->email }}
                                </div>
                            </div>


                            <div class="col-12">
                                <small class="text-secondary">
                                    Address
                                </small>

                                <div class="fw-semibold text-dark">
                                    {{ $cher->address }}
                                </div>
                            </div>

                        </div>

                    </div>


                    {{-- Card Footer --}}
                    <div class="card-footer bg-white border-top p-3">

                        <div class="d-flex gap-2">

                            {{-- Edit --}}
                            <a href="{{ route('teacher.edit',$cher->id) }}"
                               class="btn btn-outline-primary flex-grow-1">
                                Edit
                            </a>


                            {{-- Delete --}}
                            <form
                                action="{{ route('teacher.destroy', $cher->id) }}"
                                method="POST"
                                class="flex-grow-1"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-dark w-100"
                                    onclick="return confirm('Are you sure you want to delete this teacher?')"
                                >
                                    Delete
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            {{-- Empty Card --}}
            <div class="col-12">

                <div class="card border-0 shadow-sm text-center py-5">

                    <h4 class="fw-bold text-dark">
                        No Teachers Found
                    </h4>

                    <p class="text-secondary">
                        There are no teachers in the system yet.
                    </p>

                    <div>
                        <a href="{{ route('teacher.create') }}"
                           class="btn btn-primary">
                            + Add New Teacher
                        </a>
                    </div>

                </div>

            </div>

        @endforelse

    </div>


    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">

        {{ $teacher->links() }}

    </div>

</div>

@endsection