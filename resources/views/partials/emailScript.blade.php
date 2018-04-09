{{-- email signup --}}
<script type="text/javascript">

    $('.email_signup_input').on('keyup', function(){
        newValue = $(this).val();
        $('.email_signup_input').val(newValue);
    });

    $('.email_signup_button').on('click', function(){

        if ($('.email_signup_input').val() == ''){
            $('.email_signup_input').first().focus();
        }

        var button = $(this);
        var buttonLabel = button.html();
        button.html('Loading...').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: '{{url('api/email/create')}}',
            data: {
                _token: '{{csrf_token()}}',
                data : {
                    address: $('.email_signup_input').val()
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
                } else {
                    button.html(buttonLabel).prop('disabled', false);
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            }
        });
    });
</script>