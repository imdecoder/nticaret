$('.single-image-picker').fireModal({
    title: imagePickerModal.title.single,
    size: 'modal-lg single-image-picker-modal',
    bodyClass: 'single-image-picker-modal-body',
    created: function (modal) {
        let url = $(this).data('url');

        $.ajax(url, {
            method: 'GET',
            data: {
                src: $(this).data('src'),
                input: $(this).data('input')
            },
            success: function (response) {
                modal.find('.modal-body').html(response);
            }
        });
    },
    buttons: [{
        text: imagePickerModal.buttonText.single,
        submit: true,
        class: 'btn btn-primary btn-shadow',
        handler: function (modal) {
            let selectedImage = modal.find('input:radio:checked');
            let imageID = selectedImage.data('id');
            let imageSRC = selectedImage.data('src');

            modal.modal('hide');

            let input = modal.find('#single-modal-attribute').data('input');
            let src = modal.find('#single-modal-attribute').data('src');

            $('#' + input).val(imageID);
            $('#' + src).attr('src', imageSRC);
        }
    }]
});

$('.multiple-image-picker').fireModal({
    title: imagePickerModal.title.multiple,
    size: 'modal-lg multiple-image-picker-modal',
    bodyClass: 'multiple-image-picker-modal-body',
    created: function (modal) {
        let url = $(this).data('url');

        $.ajax(url, {
            method: 'GET',
            data: {
                input: $(this).data('input'),
                area: $(this).data('area')
            },
            success: function (response) {
                modal.find('.modal-body').html(response);
            }
        });
    },
    buttons: [{
        text: imagePickerModal.buttonText.multiple,
        submit: true,
        class: 'btn btn-primary btn-shadow',
        handler: function (modal) {
            let idList = modal.find('input:checkbox:checked').map(function () {
                return $(this).data('id');
            }).get();

            let srcList = modal.find('input:checkbox:checked').map(function () {
                return $(this).data('src');
            }).get();

            modal.modal('hide');

            let area = modal.find('#multiple-modal-attribute').data('area');
            let inputName = modal.find('#multiple-modal-attribute').data('input');

            let input = '';

            $.each(idList, function (index, item) {
                input = input + '<div class="col-6 col-sm-2">' +
                        '<label class="mb-4">' +
                            '<input type="hidden" name="' + inputName + '[]" value="' + item + '">' +
                            '<img src="' + srcList[index] + '" class="imagecheck-image">' +
                        '</label>' +
                '</div>';
            });

            $('#' + area).html(input);
        }
    }]
});
