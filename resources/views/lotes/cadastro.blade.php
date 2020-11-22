@extends('layouts.app')

@section('links')
    <link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-1 text-gray-800">Cadastro de Lotes</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ $lote ? route('lotes.update', ['id' => $lote->id]) : route('lotes.store') }}"
                      method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lote</label>
                                <input placeholder="Digite o lote" name="lote" class="form-control"
                                       type="text" value="{{ $lote->lote ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Produto</label>
                                <select name="produto_id" class="form-control select2">
                                    <option>Selecione um Produto</option>
                                    @foreach($produtos as $produto)
                                        @if(isset($lote) && $produto->id == $lote->produto_id)
                                            <option selected value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                        @else
                                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Chegada</label>
                                <input placeholder="Digite a data de chegada" name="data_chegada" class="form-control"
                                       type="date" value="{{ $lote->data_chegada ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Vencimento</label>
                                <input placeholder="Data de vencimento" name="data_vencimento" class="form-control"
                                       type="date" value="{{ $lote->data_vencimento ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input placeholder="Digite a quantidade" name="quantidade" class="form-control"
                                       type="number" value="{{ $lote->quantidade ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valor Unitário</label>
                                <input placeholder="Digite o valor unitário" name="valor_unitario" class="form-control"
                                       type="number" value="{{ $lote->valor_unitario ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valor Total</label>
                                <input disabled placeholder="Valor Total" name="valor_total_disabled" class="form-control"
                                       type="number" value="{{ $lote->valor_total ?? '' }}">
                                <input hidden placeholder="Valor Total" name="valor_total" class="form-control"
                                       type="number" value="{{ $lote->valor_total ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('lotes.index') }}" class="btn btn-light">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Page level custom scripts -->
    <script src="{{ asset('js/lotes/cadastro.js') }}"></script>
@endsection
