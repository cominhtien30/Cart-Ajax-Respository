$.ajaxSetup({
    beforeSend: function(){
        $('.overlay').show();
    },
    complete: function(){
        $('.overlay').hide();
    },
    headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
    async: true
});

