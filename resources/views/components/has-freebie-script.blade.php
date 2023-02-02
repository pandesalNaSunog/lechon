<script>
    $(document).ready(function(){
        let hasFreebie = $('#has-freebie');
        let hasFreebieInput = $('#has-freebie-input');
        hasFreebie.on('change', function(){
            if(hasFreebie.prop('checked')){
                hasFreebieInput.val('yes')
            }else{
                hasFreebieInput.val('no')
            }
        })
        
    })
</script>