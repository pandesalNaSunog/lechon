@props(['products'])
<div class="table-responsive">
    
    <table class="table table-striped">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Has Freebie</th>
            <th scope="col">Actions</th>
        </thead>
        <tbody id="products-table">
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <img style="height: 70px; width: 70px; border-radius: 10px; object-fit: cover" src="../public/storage/{{$product->image}}" alt="">
                </td>
                <td>&#8369; {{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>
                    {{$product->has_freebie}}
                </td>
                <td>
                    <a href="/admin/inventory/{{$product->id}}"><button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg><span class="ms-3">Edit</span></button></a>
                    <form action="/admin/inventory/{{$product->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button name="delete" class="btn btn-outline-danger">Delete</button>
                    </form>
                    
                </td>
            </tr>
            
            @endforeach
        </tbody>
        
    </table>

    
</div>
            