$=jQuery.noConflict();

$(document).ready(function(){
    console.log(admin_ajax);
    $('.remove_res').on('click',function(e){
        var id=$(this).attr('data-reservation');
        e.preventDefault();
        Swal.fire(
          {
            title:'Are You Sure?',
            type:'Warning',
            showCancelButton:true,
            confirmButtonText:'Yes Delete It'
          }).then((result)=>{
              if(result.value){
                $.ajax({
                    type:'post',
                    data:{
                        'action':'pizza_delete_reservation',
                        'id':id,
                        'type':'delete',
                    },
                    url:admin_ajax.ajaxurl,
                    success:function(data){
                        var result=JSON.parse(data)
                        if(result.response=='success'){
                            jQuery("[data-reservation='"+result.id+"']").parent().parent().remove();
                            
                        }
                    }
                })
              }
          })

        
    })
})