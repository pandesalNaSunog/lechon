@props(['order_data'])
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Contact</th>
            <th scope="col">Order Type</th>
            <th scope="col">Delivery Address</th>
            <th scope="col">Date Placed</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($order_data as $orderItem)
                <tr>
                    <td>{{$orderItem['user']}}</td>
                    <td>{{$orderItem['contact']}}</td>
                    <td>{{$orderItem['order_type']}}</td>
                    <td>{{$orderItem['delivery_address']}}</td>
                    <td>{{$orderItem['date']}}</td>
                    <td>
                        <a href="/admin/orders/{{$orderItem['id']}}">
                            <button class="btn btn-outline-danger">View Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>