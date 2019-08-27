(function($){

    $('.btn-primary_delete').on('click', function(e) {
        e.preventDefault();
        var $a= $(this);
        var url = $a.attr('href');
        $.ajax(url, {
            type: 'GET',
            success: function(){
                $a.parents('tr').fadeOut();
            },
            error: function(jqxhr){
                $a.text('DELETE');
                alert(jqxhr.responseText);
                
            }

        })

    });

})(jQuery);