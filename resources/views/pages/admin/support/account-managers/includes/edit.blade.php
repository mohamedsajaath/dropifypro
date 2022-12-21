@csrf
<div class="container">
    <div class="row g-9 mb-8 justify-content-center">
        <div class="col-md-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                <span class="required">Name :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="name" value="{{ $AccountManager->name }}"/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">
                <span class="required">E-Mail :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="email" value="{{ $AccountManager->email }}"/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">
                <span class="required">WhatsApp No :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="contact_no" value="{{ $AccountManager->contact_no }}"/>
            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-7">
                <span class="required">Response Time :</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7"></i>
            </label>
            <input type="text" class="form-control form-control" placeholder="" name="response_time" value="{{ $AccountManager->response_time }}"/>
        </div>
    </div>
</div>
