<div class="modal fade" id="modal_produtos" tabindex="-1" role="dialog" aria-labelledby="criaModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criaModalLabel">Cadastrar Produtos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="user" id="produto_form" 
                      action="{{ $produto ? route('produtos.update', ['id' => $produto->id]) : route('produtos.store') }}">
                    <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <input placeholder="Digite o nome" name="nome" class="form-control"
                                   type="text" value="{{ $produto->nome ?? '' }}">
                        </div>
                        <div class="form-group">
                        <textarea name="descricao"
                                  class="form-control"
                                  placeholder="Digite a descrição">{{ $produto->descricao ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <button id="submit_produto" type="button" class="btn btn-block btn-primary">Salvar</button>
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
