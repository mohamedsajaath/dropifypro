<script>
    $(document).on('change', '[name=condition]', function () {
        if ($('#exampleRadios2').is(':checked')) {
            $(this).closest('.radio-btns').append(`
                <div class="col-lg-12 fv-row comp-desc mt-2">
					<textarea name="comprehensive_description"
                              class="form-control form-control-lg form-control-solid"
                              placeholder="Comprehensive description">
                    </textarea>
				</div>
                `);
        } else {
            $('.comp-desc').remove();
        }
    });

    $(document).on('click', '.Specification-add-btn', function () {
        $(this).closest('.specification-wrap').find('.delete-Specification-btn').removeClass('d-none');
        $(this).closest('.card-body').after(`
        <div class="card-body border-top w-100 mb-5">
            <div class="row mb-2">
               <span style="border:1px solid #d3d3d3; border-radius:5px; margin:10px; padding:1rem; width:98.5%;"
                     class="product-specification-container">
                <div class="col-lg-12 fv-row mt-4 d-flex" style="gap:10px;">
                    <input type="text" class="form-control  w-50 h-50px" name="specification_type[]" placeholder="Specification Type"/>
                         <input type="text" class="form-control w-50 min-h-50px" name="specification_type_value[]" placeholder="Specification Value"/>
                 <span class="w-30px"></span>
                    <button type="button" class="btn btn-primary Specification-add-btn btn-sm h-40px"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="add Variant">
                    <i class="bi bi-plus-lg"></i></button>
                    <button type="button" class="btn btn-danger delete-Specification-btn btn-sm h-40px" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i class="bi bi-dash-lg"></i></button>
                </div>
               </span>
            </div>
        </div>
        `);


        $(this).remove();

    });

    $(document).on('click', '.delete-Specification-btn', function () {
        $(this).closest('.card-body').remove();
    });


    $(document).on('change', '[name=hasVariation]', function () {

        if ($('#nonvariation').is(':checked')) {
            $('.variant-row').html(``);
            $('.create-variations-btn').css('display', 'none');
            $('.append-next').after(
                `<span class="remove-non-variant-elements">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Sku:</span>
                            </label>
                            <div class="col-lg-4 fv-row">
                                <input type="text" name="sku"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Sku" required/>
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Quantity:</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-4 fv-row">
                                <input type="number" name="quantity"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="QUANTITY" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Price:</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-4 fv-row">
                                <input type="number" name="price" step="0.01"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="PRICE" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">RSP:</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-4 fv-row">
                                <input type="number" name="rsp"  step="0.01"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="RSP" required/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </span>
                    `
            );

        } else {
            $('.create-variations-btn').css('display', '');
            $('.variant-row').html(`
            <span style="border:1px solid #d3d3d3; border-radius:5px; margin:1rem; padding:1rem; width:75%;"
                 class="variant-type-container remove-container">
            <div class="col-lg-12 fv-row mt-4 d-flex" style="gap:10px;">
                <input type="text" class="form-control variant-type w-50 h-50px" placeholder="Variation Type"/>
                <select class="form-control variant-type-values" multiple="multiple">
                </select>
             <span class="w-25"></span>
                <button type="button" class="btn btn-primary variant-type-add-btn btn-sm h-40px"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="add Variant"><i
                        class="bi bi-plus-lg"></i></button>
                                    <button type="button" class="btn btn-danger delete-variant-btn btn-sm h-40px"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i
                                            class="bi bi-dash-lg"></i></button>
            </div>
           </span>
            `);
            $(".variant-type-values").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });
            $('.remove-non-variant-elements').remove();
        }


    });

    $(document).on('click', '.variant-type-add-btn', function () {

        $(this).closest('.variant-wrap').find('.delete-variant-btn').removeClass('d-none');

        $('.variant-row').append(`
      <span style="border:1px solid #d3d3d3; border-radius:5px; padding:1rem; width:90%;" class="variant-type-container remove-container mt-4">
            <div class="col-lg-12 fv-row mt-4 d-flex" style="gap:10px;">
<!--          <select class="form-control form-select float-right variant-type form-control-solid">-->
<!--                <option value="" selected>Variation Type</option>-->

<!--        <option value=""></option>-->

<!--        </select>-->

            <input type="text" class="form-control variant-type w-50 h-50px" placeholder="Variation Type"/>
            <select class="form-control variant-type-values" multiple="multiple">
            </select>
         <span class="w-25"></span>
            <button type="button" class="btn btn-primary variant-type-add-btn btn-sm h-40px" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i class="bi bi-plus-lg"></i></button>
            <button type="button" class="btn btn-danger delete-variant-btn btn-sm h-40px" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i class="bi bi-dash-lg"></i></button>
        </div>

        </span>
`);

        $(".variant-type-values").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
        $('select.variant-type').select2({
            dropdownParent: $('#kt_modal_new_target'),
        });

        if ($(this).find('.delete-variant-btn').length !== 0) {
            $(this).after(`
                          <button type="button" class="btn btn-danger delete-variant-btn btn-sm h-40px" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i class="bi bi-dash-lg"></i></button>
        `);

            $(this).remove();
        }

        $(this).remove();

    });

    $(document).on('click', '.delete-variant-btn', function () {
        $(this).closest('.variant-type-container').remove();
    });

    $(document).on('click', '.create-variations-btn', function () {
        $(this).remove();

        let types = $('.variant-row').find('.variant-type');
        let values = $('.variant-row').find('.variant-type-values');
        let valuesArr = [];

        $('.variant-row').append(`
          <span class="variant-type"></span>
        `);
        values.each(function () {
            valuesArr.push($(this).val());
        });

        let combinedValue = [];
        for (let value of $.grep(valuesArr, n => n === 0 || n)) {
            combinedValue = setCombinedValue(value, [...combinedValue])
        }

        for (let i = 0; i < combinedValue.length; i++) {
            let typevalue = ``;

            for (let s = 0; s < combinedValue[i].length; s++) {
                typevalue = ` <td>${combinedValue[i][s]}</td> <input type="hidden" class="variant-value-input" name="variant_value[${s}][]" value="${combinedValue[i][s]}" disabled/>` + typevalue;
            }

            $('.variant-row').append(`

                    <span class="variant-type-combination-container d-flex" style="gap:10px; border:1px solid #d3d3d3; border-radius:5px; margin:2rem; padding:1rem; width:90%; flex-wrap: wrap">
                            <input type="checkbox" name="variation-combination" class="form-check-input variation-combination">
                            <label> Select Combination</label><br>

                        <span class="variant-type-combination-container-combined d-flex w-100" style="flex-wrap: wrap; gap:10px;">
                           <table class="table table-bordered  text-center">
                              <tr class="head" style="font-weight:bold;">
                              </tr>
                              <tr>
                                 ${typevalue}
                              </tr>
                            </table>


                    </span>
                    </span>
            `);
        }

        types.each(function () {
            let variantType = $(this).val();
            $('.variant-type-combination-container-combined .head').prepend(`
                        <th>${variantType}</th>
                `);

            $('.variant-type').append(`
            <input type="hidden" name="variant_type[]" class="variant-type-input" value="${variantType}" />
            `);
        });

        $('.remove-container').remove();
    });


    $(document).on('click', '.delete-variant-image-btn', function () {
        $(this).css('display', 'none');
        $(this).closest('.form-group').find('.uploaded-image').css('display', 'none');
        $(this).closest('.variant-type-combination-container').find('#image-input').val('');
        $(this).closest('.variant-type-combination-container').find('.uploaded-image').attr('src', hostUrl + '/media/images/add_image.png');
    });

    $(document).on('change', '.image_input_tag', function () {
        if ($(this).val()) {
            $(this).closest('.image-field').find('.delete-variant-image-btn').css('display', '');
            $(this).closest('.form-group').find('.uploaded-image').css('display', '');
        }
    });

    $(document).on('change', '[name=variation-combination]', function () {
        if ($(this).is(':checked')) {
            let randomNum = Math.floor(Math.random() * 10);
            $(this).closest('.variant-type-combination-container').find('table').after(
                `<div class="col-lg-12 fv-row mt-4 d-flex variant-details" style="gap:10px; width:100%;">
                         <input type="text" class="form-control w-25 h-50px " name="variant-sku[]" placeholder="SKU" value="" required/>
                         <input type="number" class="form-control w-25 h-50px " name="variant-price[]" placeholder="PRICE" step="0.01" value="" required/>
                         <input type="number" class="form-control w-25 h-50px " name="variant-rsp[]" placeholder="RSP" step="0.01" value="" required/>
                         <input type="number" class="form-control w-25 h-50px " name="variant-quantity[]" placeholder="Quantity" value="" required/>

                         <div class="form-group w-25">
                                <div class="image-field d-flex">
                                    <button type="button" style="display:block;width:120px; height:50px; border: solid 1px #dcdcdc; background-color: #ffffff;" onclick="document.getElementById('getFile${randomNum}').click()">Select Image</button>
                                    <input type="file" name="variant-image[]" id="getFile${randomNum}" class="image_input_tag form-control opacity upload-image-input d-none"
                                           oninput="uploaded_imagen${randomNum}.src=window.URL.createObjectURL(this.files[0])"/>
                                         <a type="button" class="btn btn-light-danger fs-3 delete-variant-image-btn btn-sm h-40px" style="display:none;" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant image">
                                             <i class="bi bi-x-lg"></i>
                                        </a>
                                </div>
                            <div class="form-group hidden">
                                <div class="image-field">
                                    <img src="" id="uploaded_imagen${randomNum}" class="uploaded-image" style="height:100px; width:100px; display:none;"/>
                                </div>
                            </div>
                            </div>



                            </a>
                           </div>`
            );
            // $(this).closest('.variant-type-combination-container').find('.variant-type-input').prop( "disabled", false );
            $(this).closest('.variant-type-combination-container').find('.variant-value-input').prop( "disabled", false );
        } else {
            $(this).closest('.variant-type-combination-container').find('.variant-details').remove();
            // $(this).closest('.variant-type-combination-container').find('.variant-type-input').prop( "disabled", true );
            $(this).closest('.variant-type-combination-container').find('.variant-value-input').prop( "disabled", true );
        }
    });


    $(document).on('submit', '#kt_modal_new_target_form', async function (e) {
        let btn = $('.add-product-btn');
        e.preventDefault()
        try {
            loadButton(btn)
            const url = "{{ route('admin.products.store') }}";
            let ajaxRequest = new HttpRequest(url, 'POST');
            ajaxRequest.set_data_by_form_object($(this));
            let response = await ajaxRequest.call();
            $("#kt_modal_new_target").modal("hide");
            $('table#kt_datatable_column_rendering').DataTable().ajax.reload();
            toastr.success(response.message);
        } catch (err) {
            toastr.error(err);
        }finally {
            resetButton(btn,'Proceed')
        }

    });

    function setCombinedValue(arr, combinedValue) {
        let innerArr = [];
        if (combinedValue.length === 0) {
            for (let each of arr) {
                innerArr.push([each])
            }
        } else {
            for (let feach of combinedValue) {
                for (let seach of arr) {
                    innerArr.push([...feach, seach])
                }
            }
        }
        return innerArr;
    }
</script>

