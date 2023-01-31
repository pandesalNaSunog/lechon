@props(['statuses'])
<ul>
    @foreach($statuses as $status)
        <li>
            <p class="lh-sm">{{$status->status}}<br><span style="font-size: 10px">{{$status->created_at->format('M d, Y h:i A')}}</span></p>
        </li>
    @endforeach
</ul>