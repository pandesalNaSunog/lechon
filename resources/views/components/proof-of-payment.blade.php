@props(['proof'])
<p class="fw-bold">
    Proof of Purchase:
</p>

@if($proof != null)
<img src="/header.jpg" class="img-fluid" alt="" style="height: auto; width: 100%">
@else
<h6 class="fw-bold py-4 text-center">No Proof of Purchase</h6>
@endif


<input type="file" name="proof-of-purchase" id="proof" style="display: none">
<label for="proof" class="btn btn-danger mt-3 w-100">Add Proof of Purchase</label>