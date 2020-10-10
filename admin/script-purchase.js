$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){
        var el = this;
      
        // Delete id
        var deleteid = $(this).data('id');
        
        // Confirm box
        bootbox.confirm({
            title: "Confrim delete",
            message: "Do you want to delete this Purchase Product now? This cannot be undone.",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancel'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Confirm'
                }
            },


            callback: function(result) {
            
            if(result){
                // AJAX Request
                $.ajax({
                    url: 'ajaxfile-purchase.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                        // Removing row from HTML Table
                        if(response == 1){
							$(el).closest('tr').css('background','white');
							$(el).closest('tr').fadeOut(function(){
								$(this).remove();
							});
						}else{
							bootbox.alert('Record not deleted.');
						}

                    }
                });
            }
            
            
        }});
        
    });
});