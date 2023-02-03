@props(['active'])
<div class="container">
    <div class="card shadow mt-5">
        <div class="card-header">
            <h4 class="fw-bold"><?php echo ucfirst($active);?></h4>
        </div>
        <div class="card-body">
            {{$slot}}
        </div>
        
    </div>
</div>