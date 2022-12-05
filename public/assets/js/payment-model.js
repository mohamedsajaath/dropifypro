$(document).on("click", "#payment", async function () {
    // $('.custom-modal-size').addClass('mw-1000px').removeClass('mw-650px');
    await loadFormModal(
        "action",
        "method",
        "Select Payment Method",
        "",
        "Select",
        "submitButtonClass",
        `<!--begin::Row-->
<div class="row m-20">
<!--begin::Col-->
<div class="col-4">
<label class="form-check-clip text-center">
<input class="btn-check" id="op1" type="radio" value="1" checked="checked" name="option"/>
<div class="form-check-wrapper">
    <div class="form-check-indicator"></div>
    <img class="form-check-content" src="${hostUrl}/media/stock/600x400/img-81.png"/>
</div>
</label>
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-4">
<label class="form-check-clip text-center">
<input class="btn-check" type="radio" value="2" name="option"/>
<div class="form-check-wrapper">
    <div class="form-check-indicator"></div>
    <img class="form-check-content" src="${hostUrl}/media/stock/600x400/img-82.png"/>
</div>
</label>
</div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-4">
<label class="form-check-clip text-center">
<input class="btn-check" type="radio" value="3" name="option"/>
<div class="form-check-wrapper">
    <div class="form-check-indicator"></div>
    <img class="form-check-content" src="${hostUrl}/media/stock/600x400/img-83.png"/>
</div>
</label>
</div>
<!--end::Col-->
</div>
        <div class="row g-9 mb-5 " style="display:none" id="bank_transfer">
            <div class="separator my-2"></div>
            <!--begin::Col-->
            <div class="col-md-6 fv-row">
                <label class="fs-6 fw-semibold mb-2">Bank </label>
                <input type="text" class="form-control form-control-solid" value="Commercial Bank" name="bank"  />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 fv-row">
                <label class="fs-6 fw-semibold mb-2">Reference No</label>
                <input type="text" class="form-control form-control-solid" value="XXXXXXXXX" name="ref" 
                 />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-12 fv-row">
                <label class="fs-6 fw-semibold mb-2">Amount</label>
                <input type="text" class="form-control form-control-solid" value="XXXXXXXXX" name="amount" 
                 />
            </div>
            <!--end::Col-->

        </div>
<!--end::Row-->`
    );
    $(document).ready(function () {
        $('input[type="radio"]').click(function () {
            if ($(this).attr("value") == "1" || $(this).attr("value") == "2") {
                $("#bank_transfer").hide("slow");
            }
            if ($(this).attr("value") == "3") {
                $("#bank_transfer").show("slow");
            }
        });

        $('input[type="radio"]').trigger("click"); // trigger the event
        let radBtnDefault = document.getElementById("op1");
        radBtnDefault.checked = true;
        document.getElementById("bank_transfer").style.display = "none";
    });
});
