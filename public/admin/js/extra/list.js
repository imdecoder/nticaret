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

$('.hard-delete').click(function () {
    swal({
        ...hardDelete,
        icon: 'warning',
        dangerMode: true
    }).then((willDelete) => {
        if (willDelete) {
            let id = $(this).closest('tr').data('id');
            let url = $(this).data('url');

            nt_request.post(url, {data: id}, function (response) {
                if (response.status) {
                    $('tr[data-id=' + id + ']').remove();
                }
            });
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

$('.daterange-cus').daterangepicker({
    locale: {
        format: 'DD/MM/YYYY HH:mm:ss',
        applyLabel: 'Onayla',
        cancelLabel: 'İptal',
        /*fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',*/
        daysOfWeek: [
            'Pa',
            'Pz',
            'Sa',
            'Ça',
            'Pe',
            'Cu',
            'Cm'
        ],
        monthNames: [
            'Ocak',
            'Şubat',
            'Mart',
            'Nisan',
            'Mayıs',
            'Haziran',
            'Temmuz',
            'Ağustos',
            'Eylül',
            'Ekim',
            'Kasım',
            'Aralık'
        ],
        firstDay: 1
    },
    drops: 'left',
    opens: 'left',
    timePicker: true,
    timePicker24Hour: true
});

$('.clear_date_filter').click(function () {
    $('input[name=date_filter]').val('');
});
