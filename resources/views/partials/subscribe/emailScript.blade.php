{{-- email signup --}}
<script type="text/javascript">

    $('.email_subscribe_input').on('keyup', function(){
        newValue = $(this).val();
        $('.email_subscribe_input').val(newValue);
    });

    $('.email_subscribe_button').on('click', function(){

        if ($('.email_subscribe_input').val() == ''){
            $('.email_subscribe_input').first().focus();
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
                    address: $('.email_subscribe_input').val()
                }
            },
            success: function(response){
                if (response.result === true) {
                    $('.email_subscribe').parent().hide();
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