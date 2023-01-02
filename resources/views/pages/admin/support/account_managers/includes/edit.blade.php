@csrf
<div class="container">
    <div class="row g-9 mb-8 justify-content-center">
        <div class="col-md-8 fv-row">
            <input type="hidden" class="form-control form-control-solid" name="id"
                value="{{ $account_managers->id }}" />
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Name :</label>
            <input type="text" class="form-control form-control" placeholder="" name="name"
                value="{{ $account_managers->name }}" required/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">E-Mail :</label>
            <input type="email" class="form-control form-control" placeholder="" name="email"
                value="{{ $account_managers->email }}" required/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">WhatsApp No :</label>
            <input type="text" class="form-control form-control" placeholder="" name="contact_no"
                value="{{ $account_managers->contact_no }}" required/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">Response Time :</label>
            <input type="text" class="form-control form-control" placeholder="" name="response_time"
                value="{{ $account_managers->response_time }}" required/>
        </div>
    </div>
</div>
