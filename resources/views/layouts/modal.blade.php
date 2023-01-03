<!-- Modal -->
{{--<div class="modal fade" id="modal" ></div>--}}
<div class="modal fade" id="custom-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form class="form-horizontal" id="ajax-form">
                <div class="modal-body">
                    @csrf
                    <div class="modal-msg mx-2"></div>
                    <div class="modal-alert"></div>
                    <p class="modal-body-content"></p>
                    <div id="message-area"></div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger action-btn" data-loading-text=""></button>
                </div>
            </form>
        </div>
    </div>
</div>
