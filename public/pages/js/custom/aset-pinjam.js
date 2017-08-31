 $(document).ready(function() {
                resetcheckbox();
                $('#selecctall').click(function(event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"             
                        });
                    } else {
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"                     
                        });
                    }
                });
 
 
                $("#submit").on('click', function(e) {
                    e.preventDefault();
                     var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();

                    var form_data = {  
                                kodeAsetPinjam: $('#kodeAsetPinjam').val(),
                                peminjam: $('#peminjam').val(),
                                keterangan: $('#keterangan').val(),
                                ids: checkValues
                                };
                    console.log(checkValues);
                     
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//                    return  false;
                    $.ajax({
                        url: 'Data_Aset_Pinjam/Submit',
                        type: 'post',
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
                });
 
                               
                function  resetcheckbox(){
                $('input:checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                     
                   });
                }
});

