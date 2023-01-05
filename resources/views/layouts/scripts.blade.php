<!--begin::Javascript-->
<script>
var hostUrl = "{{ asset('assets/') }}";
let baseUrl = "{{url('/')}}";

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--begin::Global Javascript Bundle(mandatory for active pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>

<!--end::Global Javascript Bundle-->
<script src="{{  asset('common.js')  }}"></script>
<script src="{{  asset('AjaxHttpRequest.js')  }}"></script>
<script src="{{ asset('assets/image-uploader/image-uploader.min.js') }}"></script>

<script src="{{ asset('assets/owl.carousel.min.js') }}"></script>
@stack('script')
