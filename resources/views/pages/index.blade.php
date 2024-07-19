@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Registration</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">

            <div class="form-area">
                <form method="POST" action="{{ route('student.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="col-md-6">
                            <label>Student Surname</label>
                            <input type="text" class="form-control" name="surname" >     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" >
                        </div>
                        <div class="col-md-6">
                            <label>Student Email</label>
                            <input type="email" class="form-control" name="email" >  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>
                    </div>
                </form>
            </div>

                <table class="table mt-5" cellpadding="2" cellspacing="1">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $students as $key => $student )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $student->name }}</td>
                            <td scope="col">{{ $student->surname }}</td>
                            <td scope="col">{{ $student->phoneNumber }}</td>
                            <td scope="col">{{ $student->email }}</td>
                            <td scope="col">

                            <a href="{{  route('student.edit', $student->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
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