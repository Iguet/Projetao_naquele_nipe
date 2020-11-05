@extends('layouts.app')

@section('links')
<link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow">
        <div class="card-body">
            <div style="margin: 20px">
                <form class="user" action="">
                    <label>Nome:</label>
                    <input type="text" value="{{$equipe->nome}}">
                    <label>Meta:</label>
                    <input type="text" value="{{$equipe->meta}}">
                    <button class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('app-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('app-assets/js/demo/datatables-demo.js')}}"></script>
@endsection
