$(function() {
    $("#table_vendas").DataTable();

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
                    url: `/vendas/delete/${$(this).data('venda_id')}`,
                    type: 'POST',
                    data: {
                        _method: 'delete',
                        _token: $('#token').attr('content')
                    }
                }).done(() => {
                    Swal.fire('Excluido com Sucesso!!', '', 'success')
                    $("#table_vendas").DataTable().destroy()
                    $(this).parent().parent().remove()
                    $("#table_vendas").DataTable()
                })
            }
        })
    })

    $(".show-venda").click(function () {
        $.ajax({
            url: `/vendas/show/${$(this).data('venda_id')}`,
            type: 'GET'
        }).done((data) => {
            $("#modal_cadastro").html(data)
            $("#modal_vendas").modal('show')
        })
    })

    $("#nova_venda").click(function () {
        $.ajax({
            url: `/vendas/show/`,
            type: 'GET'
        }).done((data) => {
            $("#modal_cadastro").html(data)
            $("#modal_vendas").modal('show')
        })
    })
})
