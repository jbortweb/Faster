;
((d,c,$)=> {
    c('Hello Contact Form Admin WordPress')
    c(contact_form)

    d.addEventListener('click',e=>{
        if(e.target.matches('.u-delete')){
            e.preventDefault()
            //c(e.target.dataset.contactId)

            let id =e.target.dataset.contactId,
            confirmDelete = confirm(`¿Estas seguro de eliminar el comentario con el ID ${id}?`)

            if(confirmDelete){
                $.ajax({
                    type:'post',
                    data:{
                        'id':id,
                        'action':'fwpt_contact_form_delete'
                    },
                    url:contact_form.ajax_url,
                    success:data =>{
                        c(data);
                    }
                })
            }else{

                return false;
            }
        }
    })
})

(document,console.log,jQuery.noConflict());