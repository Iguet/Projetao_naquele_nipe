@extends('layouts.app')

@section('links')
<link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow">
        <div class="card-body">
            <div style="display: block; height: 45px;">
                <button style="float: right " type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#criaModal">Nova Equipe</button>
            </div>
            <table class=" table table-hover" id="dataTable">
                <thead class=" text-gray-400 bg-primary">
                    <th>#</th>
                    <th>nome</th>
                    <th>meta</th>
                    <th></th>
                </thead>
                <tfoot class="text-gray-400 bg-primary">
                    <th>#</th>
                    <th>nome</th>
                    <th>meta</th>
                    <th></th>
                </tfoot>
                <tbody>
                    @foreach( $equipes as $equipe )
                    <tr>
                        <td class=" txt-center">
                            {{ $equipe->id}}
                        </td>

                        <td class="txt-center">
                            <a href="/equipes/{{$equipe->id}}">{{ $equipe->nome }}</a>
                        </td>

                        <td class="txt-center">
                            {{ $equipe->meta}}
                        </td>

                        <td class="txt-center">
                            <button class="btn-circle btn-danger" onclick="exclui({{ $equipe->id }})">
                                <i class="fas fa-trash"></i>
                                <form id="{{$equipe->id}}" action="/equipes/{{$equipe->id}}/delete" method="get">
                                    @csrf
                                    <input type="hidden" value="{{$equipe->id}}" name="id" />
                                </form>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
            function exclui(id) {
                $.ajax({
                    url: "/equipes/" + id + "/delete",
                    type: 'GET',
                    success: function () {
                        alert("deu");
                    },
                    error: function () {
                        alert('não deu');
                    },
                    always: function () {
                        alert('nada aconteceu');
                    }
                });
            }
            </script>
            <!------------------------------------------|
            |                                           |
            |-------------------------------------------|
            |---MODAL ADICIONA EQUIPE-------------------|
            |-------------------------------------------|
            |*******************************************|
            |                                           |
            |------------------------------------------->
            <div class="modal fade" id="criaModal" tabindex="-1" role="dialog" aria-labelledby="criaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="criaModalLabel">Criar Equipes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="margin-left: 16px; margin-right: 16px;">
                                <form method="post" class="user" action="/equipes/add">
                                    @csrf
                                    <div class="row">
                                        <label class="">Nome:</label>
                                        <input name="nome" style="margin-left: 5px;"
                                            class="form-control form-control-user" type="text">
                                    </div>
                                    <div style="margin-top: 10px" class="row">
                                        <label>Meta:</label>
                                        <input name="meta" style="margin-left: 5px;"
                                            class="form-control form-control-user  " type="number">
                                    </div>
                                    <div style="margin-top: 20px; " class="row">
                                        <button type="submit" class="btn btn-block btn-primary">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
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
