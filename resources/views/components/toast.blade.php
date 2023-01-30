@if(session()->has('message'))
<div style="z-index: 50" class="toast align-items-center text-bg-danger border-0 position-fixed bottom-0 end-0 p-3 m-5" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
            <h4 class="fw-bold">{{session('message')}}</h4>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>
<script>
    $(document).ready(function(){
        let toast = $('#liveToast');
        toast.toast('show');
        toast.toast({delay: 3000});
    })
</script>
@endif