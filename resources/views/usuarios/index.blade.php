@extends('layouts.app')

@section('links')
    <link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <th scope="row"> {{ $usuario->id}} </th>
                            <td> {{ $usuario->name}} </td>
                            <td> {{ $usuario->email}} </td>
                            <td> Editar</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src=" {{asset('app-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('app-assets/js/demo/datatables-demo.js')}}"></script>
@endsection
