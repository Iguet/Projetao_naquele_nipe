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
                            data-target="#criaModal">Novo Produto
                    </button>
                </div>
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach( $produtos as $produto )
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    {{ $produto->id}}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('produtos.show', ['id' => $produto->id]) }}">{{ $produto->nome }}</a>
                                </td>
                                <td class="text-center">
                                    {{ $produto->descricao }}
                                </td>
                                <td class="text-center">
                                    <button class="btn-circle btn-danger" onclick="exclui({{ $produto->id }})">
                                        <i class="fas fa-trash"></i>
                                        <form id="{{$produto->id}}" action="/equipes/{{$produto->id}}/delete" method="get">
                                            @csrf
                                            <input type="hidden" value="{{$produto->id}}" name="id"/>
                                        </form>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('produtos.cadastro')
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('app-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('app-assets/js/demo/datatables-demo.js')}}"></script>
@endsection
