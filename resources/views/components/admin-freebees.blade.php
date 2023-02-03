@props(['freebies'])
<div class="mt-5">
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="fw-bold">Freebies</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Actions</th>
                        </thead>
                        <tbody>
                            @foreach($freebies as $freebie)
                            <tr>
                                <td>{{$freebie->name}}</td>
                                <td>{{$freebie->quantity}}</td>
                                <td>
                                    <a href="/lolabertarevamp/admin/inventory/freebie/{{$freebie->id}}">
                                        <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                        </svg><span class="ms-2">Edit</span></button>
                                    </a>
                                    

                                    <form action="/lolabertarevamp/admin/inventory/freebie/{{$freebie->id}}/delete" method="POST" onsubmit="return confirm('Confirm?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg><span class="ms-2">Delete</span></button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <a href="/lolabertarevamp/admin/inventory/add-freebee">
            <button class="btn btn-danger px-5 fw-bold mt-5 mb-5">Add Freebee</button>
        </a>
        
    </div>
</div>