/*Must handle exception*/
class HttpRequest {
    //public attributes
    url;
    method;
    //private attribute
    #is_file_form;
    #form_data;

    constructor(url, method) {
        this.url = url;
        this.method = method;
    }

    /*public methods*/
    set_data_as_object(data) {
        this.#validate_object(data);
        this.#is_file_form = false;
        this.#form_data = data;
    }

    set_data_by_form_object(form) {
        this.#validate_object(form);
        if (this.#do_file_elements_exist(form)) {
            this.#is_file_form = true;
            this.#form_data = new FormData(form[0]);
            return;
        }

        this.#is_file_form = false;
        this.#form_data = form.serializeArray();
    }

    append_data(key, value) {
        this.#is_form_data_initialized()
        if(this.#is_file_form){
            this.#form_data.append(key, value);
        }else{
            if(Array.isArray(this.#form_data)){
                this.#form_data.push({ name: key, value: value });
            }else{
                this.#form_data[key] = value;
            }

        }
    }

    call() {
        const ajaxContent = this.#get_ajax_data();
        return new Promise(function (resolve, reject) {
            Object.assign(ajaxContent, {
                success: function (data) {
                    resolve(data);
                },
                error: function (jqXHR, exception) {
                    let msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.Verify Network.';
                        console.log('Not connect.Verify Network.');
                    }else if (jqXHR.status === 403) {
                        console.log('Unauthorized calling. [403]');
                        msg = jqXHR.responseJSON.message;
                    }
                    else if (jqXHR.status === 404) {
                        console.log('Requested page not found. [404]');
                        msg = 'Requested page not found';
                    } else if (jqXHR.status === 422) {
                        console.log('Requested page status. [422]');
                        if (jqXHR.hasOwnProperty('responseJSON')) {
                            msg += jqXHR.responseJSON.message;
                            let errors = jqXHR.responseJSON.hasOwnProperty('errors') ? jqXHR.responseJSON.errors : null;
                            if (!(!errors || errors.length === 0 || errors === '' || errors.length === 0 || typeof errors === undefined || errors === null)) {
                                let i = 0;
                                for (let key in errors) {
                                    if (errors.hasOwnProperty(key)) {
                                        if(!msg.includes(errors[key])) {
                                            msg += "<br/>\u2022" + errors[key];
                                        }
                                    }
                                    i++;
                                }
                            }
                        }
                    } else if (jqXHR.status === 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                        // location.reload();
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    }else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    reject(msg);
                },
            });
            $.ajax(ajaxContent);
        });
    }

    /*private methods*/
    #get_ajax_data() {
        let data = {
            type: this.method,
            url: this.url,
            dataType: 'JSON',
            data: this.#form_data,
        };

        if (this.#is_file_form) {
            Object.assign(data, {
                cache: false,
                processData: false,
                async: true,
                encType: 'multipart/form-data',
                contentType: false,
                data: this.#form_data,
            });
        }

        return data;
    }

    #do_file_elements_exist(form) {
        return form.find('input[type="file"]').length > 0;
    }

    #validate_object(check) {
        if (typeof check !== 'object') {
            throw "HttpRequestObject Error: non object data not accepted";
        }
    }

    #is_form_data_initialized(){
        if(typeof this.#form_data === 'undefined'){
            throw "HttpRequestObject Error: can not append before set data";
        }
    }
}
