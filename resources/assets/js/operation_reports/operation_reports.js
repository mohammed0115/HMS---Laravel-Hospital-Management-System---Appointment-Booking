listenClick('.deleteOperationReportsBtn', function (event) {
    let operationReportId = $(event.currentTarget).attr('-dataid')
    deleteItem($('#operationReportUrl').val() + '/' + operationReportId,
        '',
        $('#operationReport').val())
})

