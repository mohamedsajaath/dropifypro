<div class="card-body border-top p-9 scroll-y">

    @csrf

    {{--CATEGORY--}}
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Categories:</label>
        <div class="col-lg-8 fv-row">
            <select class="form-control form-select float-right category form-control-solid" name="category_id"
                    required>
                <option value="" selected>Category</option>
                @foreach($ebay_category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {{--CATEGORY--}}



    {{--TITLE--}}
    <div class="row mb-6">
        <label class="col-lg-4 col-form-label fw-semibold fs-6">
            <span class="required">Title:</span>
        </label>
        <div class="col-lg-4 fv-row">
            <input type="text" name="title"
                   class="form-control form-control-lg form-control-solid "
                   placeholder="Title" required/>
        </div>
    </div>
    {{--TITLE--}}



    {{--DESCRIPTION--}}
    <div class="row mb-6">
        <label class="col-lg-4 fw-semibold fs-6">
            <span>Description:</span>
        </label>
        <div class="col-lg-8 fv-row">
            <textarea name="description" class="form-control form-control-lg form-control-solid"
                      placeholder="Description"></textarea>
        </div>
    </div>
    {{--DESCRIPTION--}}



    {{--WEIGHT--}}
    <div class="row mb-6  append-next">
        <label class="col-lg-4 fw-semibold fs-6">
            <span>Weight:</span>
        </label>
        <div class="col-lg-6 fv-row w-50 d-flex" style="gap:10px;">
            <input type="number"
                   name="weight"
                   class="form-control form-control-lg form-control-solid"
                   step="0.01"
                   placeholder="WEIGHT"/>
            <select class="form-control form-select float-right form-control-solid w-50 weight-unit" name="weight_unit"
                    required>
                <option value="lbs">lbs</option>
                <option value="oz">oz</option>
                <option value="kg">kg</option>
                <option value="gr" selected>gr</option>

            </select>
        </div>
    </div>
    {{--WEIGHT--}}

    {{--CONDITION--}}
    <div class="row mb-6 radio-btns">
        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Condition:</label>
        <div class="col-lg-8 fv-row">
            <div class="d-flex align-items-center mt-3 justify-content-xl-around w-50">
                <div class="form-check">
                    <input class="form-check-input" type="radio"
                           name="condition"
                           id="exampleRadios1" value="new" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        New
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"
                           name="condition"
                           id="exampleRadios2" value="used">
                    <label class="form-check-label" for="exampleRadios2">
                        Used
                    </label>
                </div>
            </div>
        </div>
    </div>
    {{--CONDITION--}}




    {{--PRODUCT GALLERY--}}
    <div class="input-field mb-6">
        <label class="active">Gallery</label>
        <div class="input-images1" style="padding-top: .5rem;"></div>
    </div>
    {{--PRODUCT GALLERY--}}






    {{-- SPECIFICATION --}}
    <div class="card-body  mt-4">
        <label class="col-form-label fw-semibold fs-6">Specification</label>
        <div class="row mb-2">
           <span style="border:1px solid #d3d3d3; border-radius:5px; margin:10px; padding:1rem; width:98.5%;"
                 class="product-specification-container">
            <div class="col-lg-12 fv-row mt-4 d-flex specification-wrap" style="gap:10px;">
                <input type="text" class="form-control w-50 h-50px" name="specification_type[]"
                       placeholder="Specification Type"/>
                <input type="text" class="form-control w-50 min-h-50px"
                       placeholder="Specification Value" name="specification_type_value[]"/>
             <span class="w-30px"></span>
                <button type="button" class="btn btn-primary Specification-add-btn btn-sm h-40px"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="add Variant"><i
                        class="bi bi-plus-lg"></i></button>
                <button type="button" class="btn btn-danger delete-Specification-btn btn-sm h-40px d-none"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i
                        class="bi bi-dash-lg"></i></button>
            </div>
           </span>
        </div>
    </div>
    {{-- SPECIFICATION --}}












    {{--VARIATION BUTTON--}}
    <div class="card-body border-top p-9 scroll-y">
        <div class="row mb-6 d-flex w-50">
            <div class="form-check w-50">
                <input class="form-check-input" type="radio"
                       name="variation" id="variation" value="variant_product" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Variation Product
                </label>
            </div>
            <div class="form-check w-50">
                <input class="form-check-input" type="radio"
                       name="variation" id="nonvariation" value="non_variant_product">
                <label class="form-check-label" for="exampleRadios2">
                    Non Variation Product
                </label>
            </div>
        </div>
    </div>
    {{--VARIATION BUTTON--}}


    <span class="variant-type">

    </span>


    {{-- VARIANT TYPES   --}}
    <div class="card-body border-top p-9 scroll-y">
        <div class="row mb-2 variant-row">
            <label class="col-lg-4 col-form-label fw-semibold fs-6">Variation</label>
            <span style="border:1px solid #d3d3d3; border-radius:5px; padding:1rem; width:90%;"
                  class="variant-type-container remove-container">
            <div class="col-lg-12 fv-row mt-4 d-flex variant-wrap" style="gap:10px;">
                <input type="text" class="form-control variant-type w-50 h-50px" placeholder="Variation Type"/>
                <select class="form-control variant-type-values" multiple="multiple">
                </select>
             <span class="w-25"></span>
                <button type="button" class="btn btn-primary variant-type-add-btn btn-sm h-40px"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="add Variant"><i
                        class="bi bi-plus-lg"></i>
                </button>
                <button type="button" class="btn btn-danger delete-variant-btn btn-sm h-40px d-none"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Variant"><i
                        class="bi bi-dash-lg"></i>
                </button>
            </div>
           </span>
        </div>
    </div>
    {{--VARIANT TYPES--}}


    {{--VARIANT COMBINE BUTTON--}}
    <div class="card-body border-top p-9 scroll-y">
        <div class="row mb-6">
            <div class="col-lg-12 fv-row mt-4 d-flex create-variations-container"
                 style="gap:10px; justify-content: space-around;">
                <a class="btn btn-primary create-variations-btn align-center">Create variations</a>
            </div>
        </div>
    </div>
{{--VARIANT COMBINE BUTTON--}}
