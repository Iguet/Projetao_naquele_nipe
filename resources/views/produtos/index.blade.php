@extends('layouts.app')

@section('links')
    <link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div>
                    <button style="float: right" class="btn btn-primary" id="novo_produto">Novo Produto</button>
                </div>
                <table class="table table-hover" id="table_produtos">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $produtos as $produto )
                        <tr>
                            <td class="text-center">
                                {{ $produto->id}}
                            </td>
                            <td class="text-center">
                                <button class="btn btn-link show-produto" data-produto_id="{{ $produto->id }}">{{ $produto->nome }}</button>
                            </td>
                            <td class="text-center">
                                {{ $produto->descricao }}
                            </td>
                            <td class="text-center">
                                <button class="btn btn-circle btn-danger delete" data-produto_id="{{ $produto->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="modal_cadastro"></div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('app-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/produtos/index.js') }}"></script>
@endsection
