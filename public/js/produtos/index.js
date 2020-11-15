$(function() {
    $("#table_produtos").DataTable();

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
                    url: `/produtos/delete/${$(this).data('produto_id')}`,
                    type: 'POST',
                    data: {
                        _method: 'delete',
                        _token: $('#token').attr('content')
                    }
                }).done(() => {
                    Swal.fire('Excluido com Sucesso!!', '', 'success')
                    $("#table_produtos").DataTable().destroy()
                    $(this).parent().parent().remove()
                    $("#table_produtos").DataTable()
                })
            }
        })
    })

    $(".show-produto").click(function () {
        $.ajax({
            url: `/produtos/show/${$(this).data('produto_id')}`,
            type: 'GET'
        }).done((data) => {
            $("#modal_cadastro").html(data)
            $("#modal_produtos").modal('show')
        })
    })

    $("#novo_produto").click(function () {
        $.ajax({
            url: `/produtos/show/`,
            type: 'GET'
        }).done((data) => {
            $("#modal_cadastro").html(data)
            $("#modal_produtos").modal('show')
        })
    })
})
