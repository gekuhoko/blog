@extends('template')

@section('content')
    <div class="main-content col-md-12">
        <input type="text" id="title" required="required" maxlength="50" placeholder="Title" style="width:50%">
        <textarea style="width:99%; border: 1px solid grey; border-radius: 3px;" id="body" placeholder="Body" rows="15"></textarea>
        <button type="submit" id="submit_button" class="btn btn-primary" style="float:right">
            Save
        </button>

        @push('scriptPush')
            <!-- rich text editor initiation -->
            <script src="/assets/js/tinymce/tinymce.min.js"></script>
            <script src="/assets/js/tinymce/plugins/placeholder/plugin.min.js"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: "#body",
                    //height: tinyMceHeight,
                    statusbar: true,
                    menubar: false,
                    plugins: [
                        "advlist autolink lists link image charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste jbimages placeholder"
                    ],
                    toolbar:
                    "bold italic underline | jbimages" +
                    "insertfile undo redo |" +
                    " styleselect |" +
                    " alignleft aligncenter alignright alignjustify |" +
                    " bullist numlist outdent indent |" +
                    " link image jbimages",

                    relative_urls: false
                });


                var button = $('#submit_button');
                var buttonText = button.html();

                button.on('click', function(){
                    if('' == $('.categories:checked').serialize()){
                        swal('{{trans('s.Category missing')}}', '{{trans('s.An offer needs to have at least one category')}}', 'error');
                        return false;
                    }

                    var isOnline = 0;
                    if (true == $('#offer_is_online').prop('checked')){
                        isOnline = 1;
                    }

                    $.ajax({
                        type: 'POST',
                        url: '{{url('api/offer/create')}}',
                        data: {
                            _token: '{{csrf_token()}}',
                            data : {
                                online: isOnline,
                                online_link: $('#offer_online_link').val(),
                                type: 'education',
                                fk_company: $('#offer_fk_company').val(),

                                title: $('#offer_title').val(),
                                //description: $('#offer_description').val(),
                                description: tinyMCE.activeEditor.getContent(),
                                terms_and_conditions: $('#offer_terms_and_conditions').val(),

                                expiry_date: $('#offer_expiry_date').val(),
                                created_at_frontend: $('#offer_created_at_frontend').val(),
                                picture_url: $('#offer_picture_url').val(),

                                categories: $('.categories:checked').serialize(),
                                invisibles: $('.invisibles:checked').serialize()
                            }
                        },
                        success: function(response){
                            if (response.result === true) {
                                location.href = '/admin/picture/add/?offer=' + response.id
                            } else {
                                swal(response.message);
                                button.html(buttonText).prop('disabled', false);
                            }
                        }
                    });
                });

            </script>
        @endpush
    </div>
@endsection