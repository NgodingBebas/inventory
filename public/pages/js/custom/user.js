$(function() {
    $('#form_add_user').submit(function(e) {
		e.preventDefault();
		
 	    var form_data = {  
                        idUser: $('#idUser').val(),
						nama: $('#nama').val(),
						username: $('#username').val(),
						password: $('#password').val(),
						status: $('#status').val()
                        };  
         $.ajax({
           type: "POST",
           url: "Submit",
		   dataType : 'json',
           data: form_data,
		  

		   success: function (data, status)
		   {
				if(data.status == 'success')
                {
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg); 
					$('.modal-footer').html('<a href="./" role="button" class="btn btn-info">OK</a>');
                    
                }
				else{
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg);
					$('.modal-footer').html('<a data-dismiss="modal" role="button" class="btn btn-danger">OK</a>');
				}
				$('#MessageBox').modal('show');
		   }

         });

         return false;	//stop the actual form post !important!
    });

	


});

$(function() {
    $('#form_edit_user').submit(function(e) {
		e.preventDefault();
		
 	    var form_data = {  
                        idUser: $('#idUser').val(),
						nama: $('#nama').val(),
						username: $('#username').val(),
						password: $('#password').val(),
						status: $('#status').val()
                        };  
         $.ajax({
           type: "POST",
           url: "../Update_User",
		   dataType : 'json',
           data: form_data,
		  

		    success: function (data, status)
		   {
				if(data.status == 'success')
                {
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg); 
					$('.modal-footer').html('<a href="../" role="button" class="btn btn-info">OK</a>');
                    
                }
				else{
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg);
					$('.modal-footer').html('<a data-dismiss="modal" role="button" class="btn btn-danger">OK</a>');
				}
				$('#MessageBox').modal('show');
		   }

         });

         return false;	//stop the actual form post !important!
    });

	


});


function Delete_User(id,url){
		$.ajax({
           type: "POST",
           url: url,
		   dataType : 'json',
           data: {id : id},
		   
		    success: function (data, status)
		   {
				if(data.status == 'success')
                {
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg); 
					$('.modal-footer').html('<a href="./Data_User" role="button" class="btn btn-info">OK</a>');
                    
                }
				else {
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg);
					$('.modal-footer').html('<a data-dismiss="modal" role="button" class="btn btn-danger">OK</a>');
				}
				$('#MessageBox').modal('show');
		   }

         });
	  return false;
}
