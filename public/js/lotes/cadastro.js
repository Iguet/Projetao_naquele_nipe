$(function () {
    $("input[name='quantidade']").keyup(function () {
        let quantidade = $(this).val()
        let valor_unit = $("input[name='valor_unitario']").val()
        let total_disabled = $("input[name='valor_total_disabled']")
        let total = $("input[name='valor_total']")

        total.val(parseFloat(quantidade) * parseFloat(valor_unit))
        total_disabled.val(parseFloat(quantidade) * parseFloat(valor_unit))
    })

    $("input[name='valor_unitario']").keyup(function () {
        let quantidade = $("input[name='quantidade']").val()
        let valor_unit = $(this).val()
        let total_disabled = $("input[name='valor_total_disabled']")
        let total = $("input[name='valor_total']")

        total.val(parseFloat(quantidade) * parseFloat(valor_unit))
        total_disabled.val(parseFloat(quantidade) * parseFloat(valor_unit))
    })
})
