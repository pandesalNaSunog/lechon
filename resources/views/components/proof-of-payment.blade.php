@props(['proof','order'])
<p class="fw-bold">
    Proof of Purchase:
</p>

@if($proof != null)
<img src="/public/storage/{{$order['proof_of_purchase']}}" class="img-fluid rounded-3" alt="" style="height: auto; width: 100%">

<form action="/orders/{{$order['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger mt-3 w-100" onclick="return confirm('Delete proof of purchase?')">Delete</button>
</form>

@else
<h6 class="fw-bold py-4 text-center">No Proof of Purchase</h6>
@endif

<form action="/orders/{{$order['id']}}/add-proof-of-purchase" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="file" name="proof_of_purchase" class="mt-3 form-control">
    <button class="btn btn-danger mt-3 w-100">Confirm</button>
</form>
