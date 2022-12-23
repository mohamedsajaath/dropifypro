 @csrf
 <!--begin::Input group-->
 <div class="d-flex flex-column mb-8 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
        <span class="required">Plan Name</span>
    </label>
    <!--end::Label-->
    <input type="text" class="form-control form-control-solid" placeholder="Plan Name" name="name" value="{{ $plan->name }}" />
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="d-flex flex-column mb-8 fv-row">
        <label class="required fs-6 fw-semibold mb-2">Monthly Price</label>
        <div class="input-group">
            <span class="input-group-text">GBP</span>
            <input type="number" step="0.01" class="form-control" name="price_month" value="{{ $plan->price_month }}">
        </div>
    </div>
</div>
<div class="d-flex flex-column mb-8 fv-row">
    <label class="required fs-6 fw-semibold mb-2">Yearly Price</label>
    <!--begin::Input-->
    <div class="input-group">
        <span class="input-group-text">GBP</span>
        <input type="number" step="0.01" class="form-control" name="price_year" value="{{ $plan->price_year }}">
    </div>
</div>
<input type="hidden" class="form-control form-control-solid"  name="id" value="{{ $plan->id }}" />
<!--end::Input group-->
       