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
                    <a style="float: right" href="{{ route('lotes.show') }}" class="btn btn-primary" id="novo_lote">Novo Lote</a>
                </div>
                <table class="table table-hover" id="table_lotes">
                    <thead>
                    <tr>
                        <th>Lote</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lotes as $lote)
                        <tr>
                            <td class="text-center">
                                <a href="{{ route('lotes.show', ['id' => $lote->id]) }}">{{ $lote->lote }}</a>
                            </td>
                            <td class="text-center">
                                {{ $lote->produto->nome }}
                            </td>
                            <td class="text-center">
                                {{ $lote->quantidade }}
                            </td>
                            <td class="text-center">
                                {{ $lote->valor_unitario }}
                            </td>
                            <td class="text-center">
                                {{ $lote->valor_total }}
                            </td>
                            <td class="text-center">
                                <button class="btn btn-circle btn-danger delete" data-lote_id="{{ $lote->id }}">
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
    <script src="{{ asset('js/lotes/index.js') }}"></script>
@endsection
