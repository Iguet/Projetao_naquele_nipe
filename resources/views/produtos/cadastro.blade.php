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
                <form method="post" class="user" action="{{ route('produtos.store') }}">
                    @csrf
                    <div class="form-group">
                        <input placeholder="Digite o nome" name="nome" class="form-control"
                               type="text">
                    </div>
                    <div class="form-group">
                        <textarea name="descricao"
                                  class="form-control"
                                  placeholder="Digite a descrição"></textarea>
                        <div style="margin-top: 20px; " class="row">
                            <button type="submit" class="btn btn-block btn-primary">Salvar</button>
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
