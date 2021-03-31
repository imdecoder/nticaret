function AjaxRequest () {
    this.data = {
        nt_token: $('meta[name=X-CSRF-TOKEN]').attr('content')
    }
}

AjaxRequest.prototype.post = function (url, data, callback) {
    $.ajax(url, {
        type: 'POST',
        data: {
            ...this.data,
            ...data
        },
        success: function (response) {
            if (response.status) {
                iziToast.success({
                    message: response.message,
                    position: 'topRight'
                });
            } else {
                iziToast.error({
                    message: response.message,
                    position: 'topRight'
                });
            }

            callback(response);
        },
        error: function (xhr, opt, error) {
            iziToast.error({
                message: error,
                position: 'topRight'
            });

            callback({
                status: false,
                message: error
            });
        }
    });
}

AjaxRequest.prototype.get = function (url, data, callback) {
    $.ajax(url, {
        type: 'GET',
        data: {
            ...this.data,
            ...data
        },
        success: function (response) {
            if (response.status) {
                iziToast.success({
                    message: response.message,
                    position: 'topRight'
                });
            } else {
                iziToast.error({
                    message: response.message,
                    position: 'topRight'
                });
            }

            callback(response);
        },
        error: function (xhr, opt, error) {
            iziToast.error({
                message: error,
                position: 'topRight'
            });

            callback({
                status: false,
                message: error
            });
        }
    });
}

let nt_request = new AjaxRequest();
