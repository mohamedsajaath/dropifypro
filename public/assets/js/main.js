const baseURL = $('meta[name="base_url"]').attr('content');
const csrfToken = $('meta[name="csrf_token"]').attr('content');

$(document).on('submit', '#ajax-form', async function (e) {
    e.preventDefault();
    let url = $(this).attr('action');
    let method = $(this).attr('method');
    let data = $(this).serialize();
    let table = $(this).attr('data-table');
    let redirection = $(this).attr('data-redirection');
    let message_area = $(this).closest('form').find('#message-area');

    let btn = $(this).find('button[type=submit]');
    let originalText = btn.html();

    message_area.html('');
    try {
        let response = await doAjaxPost(url, method, data);
        if (typeof redirection !== 'undefined') {
            if (redirection != '') {
                if (response.result == 'success' && response.path != '') {
                    if (response.blank) {
                        window.open(response.path, '_blank');
                    }
                    if (redirection != 'false')
                        window.location.href = redirection;
                }
            }
        }else{
            notify(response.message, response.result);
        }

        $(this).closest("body").find(".close").click();
        $('table#' + table).DataTable().ajax.reload(null, false);
        resetButton(btn, originalText);

        $('input:checkbox').prop('checked', false);

    } catch (err) {
        let message = showMsg(err, '', 'danger');
        message_area.html(message);
        resetButton(btn, originalText);
    }
});

$(document).on('submit', 'form', function () {
    let btn = $(this).find('button[type=submit]');
    let loadingText = btn.attr('data-loading-text');
    loadButton(btn, loadingText);
});

$(document).on('click', '.load-modal', function () {
    let url = $(this).attr('data-url')
    $('#modal').load(url, function () {
        let modal = new bootstrap.Modal(document.getElementById('modal'));
        modal.show();
    });
});


function initDataTable(table, columns, formId, aaSorting = [],
                       columnDefs = [], pageLength = 100,
                       domPos = "", table_title = "", options = {}, lengthMenu = [[50, 100, 500, 1000, -1], [50, 100, 500, 1000, 'All']]) {
    let url = table.attr('data-url');

    let dt_options = {
        processing: true,
        serverSide: true,
        retrieve: true,
        columnDefs: columnDefs,
        orderCellsTop: true,
        ajax: {
            url: url,
            data: function (d) {
                d.form_data = $('#' + formId).serialize()
            }
        },
        pageLength: pageLength,
        lengthMenu: lengthMenu,
        aaSorting: aaSorting,
        // scrollX: true,
        columns: columns,
        responsive: true,
        dom: domPos,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: table_title + ' per page: _MENU_  ',
        },
        fnDrawCallback: function () {
            if (table.find('[data-toggle="tooltip"]').length > 0) {
                table.find('[data-toggle="tooltip"]').tooltip();
            }
            resetButton($('#filter-form').find('button[type=submit]'),'Submit');
        },
        initComplete: function () {
            // Apply the search
            this.api().columns().every(function () {
                var that = this;

                $('input, select', this.header()).on('keyup change clear', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }

    }

    dt_options = {...dt_options, ...options};
    return new Promise(function (resolve, reject) {
        let t = table.DataTable(dt_options);
        resolve(t);
    });

}

function doAjaxPost(url, method, data) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: method || "POST",
            url: url,
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            enctype: '',
            // processData: '',
            data: data || {},
            success: function (data) {
                resolve(data);
            },
            error: function (jqXHR, exception) {
                let msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.Verify Network.';
                    console.log('Not connect.Verify Network.');
                } else if (jqXHR.status === 404) {
                    console.log('Requested page not found. [404]');
                    msg = 'Requested page not found';
                } else if (jqXHR.status === 422) {
                    console.log('Requested page status. [422]');
                    if (jqXHR.hasOwnProperty('responseJSON')) {
                        msg += jqXHR.responseJSON.message;
                        let errors = jqXHR.responseJSON.hasOwnProperty('errors') ? jqXHR.responseJSON.errors : null;
                        if (!isEmpty(errors)) {
                            let i = 0;
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    msg += "<br/>\u2022" + errors[key]+"";
                                }
                                i++;
                            }
                        }
                    }
                } else if (jqXHR.status === 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }

                reject(msg);
            },
        });
    })
}

let showMsg = (msg, bold, classType) => {
    let alert = `
        <div class="alert alert-${classType}" role="alert">`;

    if (bold != '') {
        alert += `<strong class="d-block d-sm-inline-block-force">${bold}!</strong>&nbsp`;
    }

    alert += `${msg}
            </div>
    `;

    return alert;
};

let loadModal = function (modalId, url) {
    $('#' + modalId).load(url, function () {
        $('#' + modalId).modal();
    });
};

let notify = function (text, type, title) {

    $("#modal").find(".close").click();

    if (type == 'success') {
        vt.success(text, {
            position: "bottom-right",
            duration: 3000
        });
    } else if (type == 'error') {
        vt.error(text, {
            position: "bottom-right",
            duration: 5000
        });
    }
}

let notifyWithModal = function (text, type, title) {
    if (type == 'success') {
        vt.success(text, {
            position: "bottom-right",
            duration: 3000
        });
    } else if (type == 'error') {
        vt.error(text, {
            position: "bottom-right",
            duration: 5000
        });
    }
}

let isEmpty = str => {
    return (!str || str.length === 0 || str === '' || str.length === 0 || typeof str === undefined || str === null);
};

let loadButton = (btn, loadingText = 'Submitting...') => {
    var loadingText = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ' + loadingText;
    btn.prop('disabled', true);
    btn.html(loadingText);
}

let resetButton = (btn, originalText = 'Submit') => {
    btn.prop('disabled', false);
    btn.html(originalText);
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

$(document).on('change', '#is_active_switch', function () {
    if (this.checked) {
        $(this).closest('form').find('#is_active').val('1');
    } else {
        $(this).closest('form').find('#is_active').val('0');
    }
});

$(document).on('change', '._switch', function () {
    let _switchId = $(this).attr('id');
    let switchId = _switchId.replace("_switch", "");

    if (this.checked) {
        $(this).closest('.switch').find('#' + switchId + '').val('1');
    } else {
        $(this).closest('.switch').find('#' + switchId + '').val('0');
    }
});


$(document).on('change', '._checkbox', function () {
    let _checkboxId = $(this).attr('id');
    let checkboxId = _checkboxId.replace("_checkbox", "");

    if (this.checked) {
        $(this).closest('.checkbox').find('#' + checkboxId + '').val('1');
    } else {
        $(this).closest('.checkbox').find('#' + checkboxId + '').val('0');
    }
});

$(document).on('change', '.select-dynamic', function () {

    let data = {};

    let url = $(this).attr('data-url');
    let target = $(this).attr('data-target');
    let name = $(this).attr('name');
    let selected = $(this).attr('data-selected');
    let value = $(this).val();

    data[name] = value;
    data['selected'] = selected;

    $.ajax({
        url: url,
        data: data,
        dataType: "json",
        success: function (data) {
            if (data.result == 'error')
                notify(data.message, data.result);

            $(target).html(data.message);
        }
    });
});

$(document).on('click', '#download-file', function (e) {
    e.preventDefault();

    let url = $(this).attr('data-url');

    $.ajax({
        url: url,
        dataType: "json",
        success: function (data) {
            if (data.status == 'success')
                window.open(data.path, '_blank');
            else
                notify(data.message, data.status);
        }
    });
})

$('#parent-checkbox').change(function () {
    if ($(this).is(':checked')) {
        $('.child-checkbox').prop('checked', true);
    } else {
        $('.child-checkbox').prop('checked', false);
    }
    $('.child-checkbox').trigger('change');
});
