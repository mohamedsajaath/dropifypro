<!--begin::Javascript-->
<script>
let hostUrl = "{{ asset('assets/') }}";
</script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>--}}
<!--begin::Global Javascript Bundle(mandatory for active pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
{{--<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>--}}
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
{{--<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>--}}

<!--end::Global Javascript Bundle-->
<script src="{{  asset('common.js')  }}"></script>
{{--<script src="{{  asset('AjaxHttpRequest.js')  }}"></script>
<script src="{{ asset('assets/image-uploader/image-uploader.min.js') }}"></script>--}}

@stack('script')
