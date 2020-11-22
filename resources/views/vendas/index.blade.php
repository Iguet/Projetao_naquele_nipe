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
                    <button style="float: right" class="btn btn-primary" id="nova_venda">Nova Venda</button>
                </div>
                <table class="table table-hover" id="table_vendas">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vendas as $venda)
                        <tr>
                            <td class="text-center">
                                <button class="btn btn-link show-venda"
                                        data-venda_id="{{ $venda->id }}">{{ $venda->id }}</button>
                            </td>
                            <td class="text-center">
                                {{ $venda->produto->nome }}
                            </td>
                            <td class="text-center">
                                {{ $venda->valor }}
                            </td>
                            <td class="text-center">
                                {{ $venda->quantidade }}
                            </td>
                            <td class="text-center">
                                <button class="btn btn-circle btn-danger delete" data-venda_id="{{ $venda->id }}">
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
    <script src="{{ asset('js/vendas/index.js') }}"></script>
@endsection
