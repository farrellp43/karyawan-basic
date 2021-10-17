@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','dashboard')

<section class="section">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary rounded">
                <div class="card-body">
                    <h2>
                        <center>Karyawan</center>
                    </h2>
                    <table width="100%" class="table table-striped table-bordered table-hover table-md">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Umur</th>
                                <th>Gaji</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td><a href="{{ route('employees.edit', $employee->id)}}"
                                        class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7 ml-auto mr-auto">
            <img src="{{ url('images/slider/2.png') }}" width="90%" alt="">
        </div>
    </div>
</section>

@endsection