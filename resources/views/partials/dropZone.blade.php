@push('headPush')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone-amd-module.js"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css">
@endpush

<div class="form-group">
    <div class="col-lg-6" style="margin-left: 15px">
        <div class="row" id="current_pictures">
            {{-- placeholder --}}
        </div>

        <div class="row">
            <label id="show_picture_upload_label" style="display:none;">Upload Pictures</label>
        </div>
        <div class="row">
            <button id="show_picture_upload" class="btn btn-default">Upload Pictures</button>
            <form style="display:none" action="/api/picture/create/{{App\Post::nextId()}}"
                  class="dropzone"
                  id="my-awesome-dropzone">
            </form>
        </div>
        @push('scriptPush')
        <script>
            Dropzone.options.myAwesomeDropzone = {
                addRemoveLinks: false,
                success: function(file, response){
                    updatePictureList();
                }
            };
            $('#show_picture_upload').on('click', function(){
                $(this).hide();
                $('#show_picture_upload_label').show();
                $('#my-awesome-dropzone').fadeIn();
            });

            $(document).on( 'click', '.picture_delete', function(){
                $(this).html('{{trans('s.Deleting...')}}').prop('disabled', true);
                var pictureId = $(this).attr('data-picture-id');
                $.ajax({
                    type: 'POST',
                    url: '/api/picture/delete/' + pictureId,
                    success: function(response){
                        updatePictureList();
                    }
                });
            });

            $(document).on( 'click', '.picture_master', function(){
                $(this).html('{{trans('s.Loading...')}}').prop('disabled', true);
                var pictureId = $(this).attr('data-picture-id');
                $.ajax({
                    type: 'POST',
                    url: '/api/picture/master/' + pictureId,
                    success: function(response){
                        updatePictureList();
                    }
                });
            });

            updatePictureList();

            function updatePictureList()
            {
                $.ajax({
                    type: 'GET',
                    url: '{{url('api/picture/list/'.App\Post::nextId())}}',
                    success: function(response){
                        $('#current_pictures').html('');
                        var masterButton = '';
                        for (i = 0; i < response.length; i++) {
                            if(response[i].master != 1){
                                masterButton = '<BR><button style="margin-left: 10px;margin-top: 5px; margin-bottom: 20px;" class="picture_master btn-sm btn btn-success" data-picture-id="'+ response[i].id + '">Set as main</button>';
                            } else {
                                masterButton = '<div style="margin-top:10px; text-align: center"><i>main</i></div>';
                            }
                            $('#current_pictures').append('<div style="margin:20px; float:left"><a href="/' + response[i].url + '" target=_blank><img style="height:100px; width: 100px;" src="/' + response[i].url + '"></a><BR><button style="margin-left: 20px;margin-top: 10px; margin-bottom: 5px;" class="picture_delete btn-sm btn btn-danger" data-picture-id="'+ response[i].id + '">Delete</button>' + masterButton +'</div>');
                        }
                    }
                });
            }
        </script>
        @endPush
    </div>
</div>