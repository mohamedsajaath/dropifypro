@extends('layouts.app')
@section('content')
    @include('includes.bread_crumb_with_header', [
        'header' => 'Tickets',
        'bread_crumbs' => ['Dashboard' => route('dashboard'), 'Support' => ''],
    ])
    @include('pages.admin.support.tickets.includes.table-details')
@endsection
@push('script')

    {{-- create tickets --}}
    <script>
        const modalId = 'modal';
        $(document).on('click', '.add-manager', async function() {
            const btn = $(this);
            const btnTitle = btn.html();
            try {
                loadButton(btn, 'Loading ...');
                let loadURL = `${baseUrl}/admin/support/account-managers/create`;
                await loadModal(modalId, loadURL);
            } catch (err) {
                toast.error("Could not load add event popup. (error_ref: add_account_manager)");
                console.log("add_account_manager", err);
            } finally {
                resetButton(btn, btnTitle);
            }
        });
    </script>


    {{-- Account Manager details --}}
    <script>
        $(document).on('click', '.account-manager', function() {
            $('.custom-modal-size').addClass('mw-550px').removeClass('mw-650px');
            loadDetailModal("My Account Manager", "",
                ` `);
        });
    </script>

    {{-- View tickets details --}}
    <script>
        $(document).on('click', '.view-tickets', function() {
            $('.custom-modal-size').addClass('mw-700px').removeClass('mw-650px');
            loadDetailModal("Ticket", "View Tickets Details",
                `<div class="scroll-y h-lg-auto" data-kt-element="messages" data-kt-scroll="true"
    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
    data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
    data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px"
    style="max-height: 350px;">
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?
            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed
                to a repository on GitHub.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                data-kt-element="message-text">Ok, Understood!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                <a href="https://keenthemes.com">Keenthemes.com</a>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                data-kt-element="message-text">Most purchased Business courses during this sale!</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and
                drinks provided</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                data-kt-element="message-text"></div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->
    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                    <span class="text-muted fs-7 mb-1">Just now</span>
                </div>
                <!--end::Details-->
            </div>
            <!--end::User-->
            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
</div> `);
        });
    </script>


    {{-- Close --}}
    <script>
        $(document).on('click', '.close', function() {
            $('.custom-modal-size').addClass('mw-650px').removeClass('mw-650px');
            loadFormModal("", "", "Close Ticket", "Are you sure want to close?", "Yes,Close it!", "submit-btn",
                ` `);
        });
    </script>
@endpush
