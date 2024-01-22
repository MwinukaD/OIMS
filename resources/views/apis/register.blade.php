<script>
    $(()=>{
        $('#register-form').on('submit',(event)=>{
            event.preventDefault();
            let data = $('#register-form').serialize();

            $.ajax({
                'url' : '{{route('register_process')}}',
                'method' : 'post',
                'data' : data,
                success : function (response){
                    Swal.fire({
                        title: "Successfully",
                        text: response.message,
                        icon: response.status
                    });
                },
                error : function (xhr, status, error){
                   /* Swal.fire({
                        title: "Something Wrong",
                        text: error,
                        icon: "error"
                    });*/

                    console.log(error);
                }
            })



        })
    })
</script>
