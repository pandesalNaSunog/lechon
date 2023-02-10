@props(['proof','order'])
<p class="fw-bold">
    Proof of Purchase:
</p>

@if($proof != null)
<img src="/public/storage{{$order['proof_of_purchase']}}" class="img-fluid" alt="" style="height: auto; width: 100%">
@else
<h6 class="fw-bold py-4 text-center">No Proof of Purchase</h6>
@endif

<form action="/orders/{{$order['id']}}/add-proof-of-purchase" method="POST">
    @csrf
    <input type="file" name="proof_of_purchase" class="form-control">
    <button class="btn btn-danger mt-3 w-100">Confirm</button>
</form>
