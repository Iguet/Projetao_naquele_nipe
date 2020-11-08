@extends('layouts.app')

@section('links')
    <link href="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body">
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Criar Equipes</h5>
                                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div style="margin-left: 16px; margin-right: 16px;">
                                    <form method="post" class="user" action="/equipes/add">
                                        @csrf
                                        <div class="row">
                                            <label class="">Nome:</label>
                                            <input style="margin-left: 5px;" class="form-control form-control-user"
                                                   type="text">
                                        </div>
                                        <div style="margin-top: 10px" class="row">
                                            <label>Meta:</label>
                                            <input style="margin-left: 5px;" class="form-control form-control-user  "
                                                   type="number">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
    <script src=" {{asset('app-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('app-assets/js/demo/datatables-demo.js')}}"></script>
@endsection
