<!-- Button trigger modal -->
@push('modal')
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" style="padding-right: 0;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="pull-left" href="/author" style="margin:0; padding: 0;">
                    <img class="media-object" src="/assets/author.png" style="border-radius: 64px; margin-right:15px; padding:0; margin-bottom: 12px; margin-top: 3px;">
                </a>
                <button id="contact_modal_close" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" style="font-weight:600; margin-bottom:5px;">Let's work together</h5>
                <h6 class="modal-title" style="font-weight:300;">{{config('owner.name')}}</h6>
                <h6 class="modal-title" style="font-weight:300; font-size:80%;">{{config('owner.title')}}</h6>
            </div>
            <div class="modal-body">
                I do freelance work and enjoy helping founders. Let me know about your project - maybe we can establish a great partnership! You can also email to <a style="text-decoration: underline" title="kuschnik.gerhard@gmail.com" href="mailto:kuschnik.gerhard@gmail.com">kuschnik.gerhard@gmail.com</a>
                <div style="padding:15px 15px 0 15px;">
                    <div class="row">
                        <div class="col-lg-6" style="padding:0">
                            <input id="contact_email" type="text" class="form-control" placeholder="Your email address" style="margin-top:5px; margin-bottom:5px; height:49px;">
                        </div>
                        <div class="col-lg-6" style="padding:0"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding:0">
                            <textarea id="contact_message" rows="4" class="form-control" placeholder="Your message" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding:0; text-align: right;">
                            <button id="contact_send" type="button" class="btn" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 30px; padding-right: 30px; margin-top:15px;">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="modal-footer"></div>--}}
        </div>
    </div>
</div>
@endpush

@push('scriptPush')
    <script type="text/javascript">
        $('#contact_send').on('click', function(){

            var button = $(this);
            var buttonLabel = button.html();
            button.html('Loading...').prop('disabled', true);

            {{-- basic "have input?" validations --}}
            if ($('#contact_email').val() == '') {

                $('#contact_email').focus();


                swal({
                    type: 'error',
                    title: 'Please enter your email'
                });

                button.html(buttonLabel).prop('disabled', false);
                return false;
            }
            if ($('#contact_message').val() == '') {

                $('#contact_message').focus();

                swal({
                    type: 'error',
                    title: 'Please enter a message'
                });

                button.html(buttonLabel).prop('disabled', false);
                return false;
            }

            $.ajax({
                type: 'POST',
                url: '{{url('api/email/contact')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    data : {
                        email: $('#contact_email').val(),
                        message: $('#contact_message').val()
                    }
                },
                success: function(response){
                    if (response.result === true) {
                        swal({
                            type: 'success',
                            title: 'Message sent',
                            text: '{{config('owner.name')}} will reply to ' + $('#contact_email').val() + ' within 24 hours'
                        });
                        $('#contact_email').val('');
                        $('#contact_message').val('');
                        button.html(buttonLabel).prop('disabled', false);
                        $('#contact_modal_close').click();
                    } else {
                        button.html(buttonLabel).prop('disabled', false);
                        swal({
                            type: 'error',
                            title: 'Error',
                            text: response.message
                        });
                        button.html(buttonLabel).prop('disabled', false);
                    }
                }
            });
        });
    </script>
@endpush