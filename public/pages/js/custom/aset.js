$(function() {
    $('#form_add_jenis').submit(function(e) {
		e.preventDefault();
		
 	    var form_data = {  
                        idJenis: $('#idJenis').val(),
						namaJenis: $('#namaJenis').val(),
						tipe: $('#tipe').val()
                        };  
         $.ajax({
           type: "POST",
           url: "Submit_Jenis",
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
    $('#form_edit_jenis').submit(function(e) {
		e.preventDefault();
		
 	    var form_data = {  
                        idJenis: $('#idJenis').val(),
						namaJenis: $('#namaJenis').val(),
						tipe: $('#tipe').val()
                        };  
         $.ajax({
           type: "POST",
           url: "../Update_Jenis",
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


function Delete_Jenis(id,url){
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
					$('.modal-footer').html('<a href="./Data_Aset" role="button" class="btn btn-info">OK</a>');
                    
                }
				else{
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg);
					$('.modal-footer').html('<a data-dismiss="modal" role="button" class="btn btn-danger">OK</a>');
				}
				$('#MessageBox').modal('show');
		   }

         });
	  return false;
}

$(function() {
    $('#form_add_aset').submit(function(e) {
		e.preventDefault();
		
		console.log('string');
 	    var form_data = {  
                        idAset: $('#idAset').val(),
						nomorSeri: $('#nomorSeri').val(),
						jenisAset: $('#jenisAset').val(),
						statusAset: $('#statusAset').val(),
						jumlah: $('#jumlah').val()
                        };  
         $.ajax({
           type: "POST",
           url: "Submit_Aset",
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
    $('#form_add_asetjumlah').submit(function(e) {
		e.preventDefault();
		
		
 	    var form_data = {  
                        idAset: $('#idAset').val(),
						nomorSeri: $('#nomorSeri').val(),
						jenisAset: $('#jenisAset').val(),
						statusAset: $('#statusAset').val(),
						jumlah: $('#jumlah').val()
                        };  
         $.ajax({
           type: "POST",
           url: "Submit_Aset",
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
    $('#form_edit_aset').submit(function(e) {
		e.preventDefault();
		
 	    var form_data = {  
                        idAset: $('#idAset').val(),
						nomorSeri: $('#nomorSeri').val(),
						jenisAset: $('#jenisAset').val(),
						statusAset: $('#statusAset').val()
                        };  
         $.ajax({
           type: "POST",
           url: "../Update_Aset",
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

function Delete_Aset(id,url){
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
					$('.modal-footer').html('<a href="./Data_Aset" role="button" class="btn btn-info">OK</a>');
                    
                }
				else{
					$('.modal-title').html('Informasi'); 
					$('.modal-body').html(data.msg);
					$('.modal-footer').html('<a data-dismiss="modal" role="button" class="btn btn-danger">OK</a>');
				}
				$('#MessageBox').modal('show');
		   }

         });
	  return false;
}





