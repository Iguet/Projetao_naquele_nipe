$(function() {
    $("#table_lotes").DataTable();

    $(".delete").click(function () {
        Swal.fire({
            title: "Tem certeza que deseja deletar?",
            text: "Essa ação não pode ser revertida!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Sim, tenho certeza!",
            cancelButtonText: "Não, to fazendo trem errado!"
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/lotes/delete/${$(this).data('lote_id')}`,
                    type: 'POST',
                    data: {
                        _method: 'delete',
                        _token: $('#token').attr('content')
                    }
                }).done(() => {
                    Swal.fire('Excluido com Sucesso!!', '', 'success')
                    $("#table_lotes").DataTable().destroy()
                    $(this).parent().parent().remove()
                    $("#table_lotes").DataTable()
                })
            }
        })
    })
})
