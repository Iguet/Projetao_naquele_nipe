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
                                <input placeholder="Digite o lote" name="lote" class="form-control @error('lote') is-invalid @enderror"
                                       type="text" value="{{ $lote->lote ?? '' }}">
                                @error('lote')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Produto</label>
                                <select name="produto_id" class="form-control select2 @error('produto_id') is-invalid @enderror">
                                    <option value="">Selecione um Produto</option>
                                    @foreach($produtos as $produto)
                                        @if(isset($lote) && $produto->id == $lote->produto_id)
                                            <option selected value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                        @else
                                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('produto_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Chegada</label>
                                <input placeholder="Digite a data de chegada" name="data_chegada" class="form-control @error('data_chegada') is-invalid @enderror"
                                       type="date" value="{{ $lote->data_chegada ?? '' }}">
                                @error('data_chegada')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Vencimento</label>
                                <input placeholder="Data de vencimento" name="data_vencimento" class="form-control @error('data_vencimento') is-invalid @enderror"
                                       type="date" value="{{ $lote->data_vencimento ?? '' }}">
                                @error('data_vencimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input placeholder="Digite a quantidade" name="quantidade" class="form-control @error('quantidade') is-invalid @enderror"
                                       type="number" value="{{ $lote->quantidade ?? '' }}">
                                @error('quantidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valor Unitário</label>
                                <input placeholder="Digite o valor unitário" name="valor_unitario" class="form-control @error('valor_unitario') is-invalid @enderror"
                                       type="number" value="{{ $lote->valor_unitario ?? '' }}">
                                @error('valor_unitario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Valor Total</label>
                                <input disabled placeholder="Valor Total" name="valor_total_disabled" class="form-control @error('valor_total') is-invalid @enderror"
                                       type="number" value="{{ $lote->valor_total ?? '' }}">
                                @error('valor_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
