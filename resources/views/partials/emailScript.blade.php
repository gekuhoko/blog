{{-- email signup --}}
<script type="text/javascript">

    $('.email_signup_input').on('keyup', function(){
        newValue = $(this).val();
        $('.email_signup_input').val(newValue);
    });

    $('.email_signup_button').on('click', function(){
        $(this).html('Loading...').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: '{{url('api/email/create')}}',
            data: {
                _token: '{{csrf_token()}}',
                data : {
                    email: $('.email_signup_input').val()
                }
            },
            success: function(response){
                if (response.result === true) {
                    $('.email_signup_input').hide();
                    $('.email_signup_button').hide();
                    swal({
                        type: 'success',
                        title: 'Success',
                        text: 'Email got registered'
                    });
                }
            }
        });
    });
</script>