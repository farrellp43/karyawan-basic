@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            @if(session()->get('success'))
            <div class="alert alert-success my-3">
                {{ session()->get('success') }}  
            </div>
            @endif

            <a href="{{route('employees.create')}}" class="btn btn-primary mb-4">Add Karyawan</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Umur</td>
                        <td>Gaji</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->age}}</td>
                        <td>{{$employee->salary}}</td>
                        <td><a href="{{ route('employees.edit', $employee->id)}}" class="btn btn-primary">Edit</a></td>
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
    <div>
@endsection