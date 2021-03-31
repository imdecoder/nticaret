$('.delete').click(function () {
    let id = $(this).closest('tr').data('id');
    let url = $(this).data('url');

    nt_request.post(url, {data: id}, function (response) {
        if (response.status) {
            $('tr[data-id=' + id + ']').remove();
        }
    });
});

$('.restore').click(function () {
    let id = $(this).closest('tr').data('id');
    let url = $(this).data('url');

    nt_request.post(url, {data: id}, function (response) {
        if (response.status) {
            $('tr[data-id=' + id + ']').remove();
        }
    });
});

$('.all-delete').click(function () {
    let url = $(this).data('url');
    let list = $('.custom-table input:checkbox:checked').map(function () {
        return $(this).data('id');
    }).get();

    nt_request.post(url, {data: list}, function (response) {
        if (response.status) {
            location.reload();
        }
    });
});

$('.all-restore').click(function () {
    let url = $(this).data('url');
    let list = $('.custom-table input:checkbox:checked').map(function () {
        return $(this).data('id');
    }).get();

    nt_request.post(url, {data: list}, function (response) {
        if (response.status) {
            location.reload();
        }
    });
});

$('.all-hard-delete').click(function () {
    swal({
        ...hardDelete,
        icon: 'warning',
        dangerMode: true
    }).then((willDelete) => {
        if (willDelete) {
            let url = $(this).data('url');
            let list = $('.custom-table input:checkbox:checked').map(function () {
                return $(this).data('id');
            }).get();

            nt_request.post(url, {data: list}, function (response) {
                if (response.status) {
                    location.reload();
                }
            });
        }
    });
});
