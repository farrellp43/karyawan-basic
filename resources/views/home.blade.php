@extends('layouts.admin')

@section('content')

@section('pages','admin')
@section('title','Dashboard')

<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary rounded">
                <div class="card-body">
                    <div class="card-header">
                        <div class="card-header-action">
                            <a class="btn btn-icon btn-primary" href="{{ route('employees.create') }}"><i
                                    class="fas fa-plus"></i> Add Karyawan</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="DataTables">
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
                                    <td align="center">
                                        <div class="row">
                                            <a href="{{ route('employees.edit', $employee->id)}}"
                                                class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection