<!--begin::Javascript-->
<script>var hostUrl = "{{ asset('assets/') }}";</script>
<!--begin::Global Javascript Bundle(mandatory for active pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<script src="{{  asset('common.js')  }}"></script>
<script src="{{  asset('AjaxHttpRequest.js')  }}"></script>

@stack('script')


