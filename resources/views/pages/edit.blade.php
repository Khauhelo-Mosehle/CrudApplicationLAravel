@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Edit Form</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('student.update', $student->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student Surname</label>
                            <input type="text" class="form-control" name="surname" value="{{ $student->surname }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" value="{{ $student->phoneNumber }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
