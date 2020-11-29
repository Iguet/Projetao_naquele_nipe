<div class="modal fade bd-example-modal-lg" id="modal_vendas" tabindex="-1" role="dialog"
     aria-labelledby="criaModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criaModalLabel">Cadastrar Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="user" id="venda_form" 
                      action="{{ $venda ? route('vendas.update', ['id' => $venda->id]) : route('vendas.store') }}">
                    <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="produto_id">
                                <option value="">Selecione um Produto</option>
                                @foreach($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="valor" class="form-control" placeholder="Digite o valor" type="number"
                                   value="{{ $venda->valor ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <input name="quantidade" class="form-control" placeholder="Digite a quantidade" type="number"
                                   value="{{ $venda->quantidade ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <button id="submit_venda" type="button" class="btn btn-block btn-primary">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
