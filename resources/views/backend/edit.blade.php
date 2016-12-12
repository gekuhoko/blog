@extends('template')

@section('content')
    <div class="main-content col-md-12">
        <input type="text" id="title" required="required" maxlength="50" placeholder="Title" style="width:50%" value="{{$post->title}}">
        <textarea style="width:99%; border: 1px solid grey; border-radius: 3px;" id="body"  placeholder="Body" rows="15">{{$post->body}}</textarea>
        <button id="submit_button" class="btn btn-primary" style="float:right">
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
                if ($('#title').val() == ''){
                    alert('input a title');
                    return false;
                }
                if (tinyMCE.activeEditor.getContent() == ''){
                    alert('input a body');
                    return false;
                }

                $.ajax({
                    type: 'POST',
                    url: '{{url('backend/edit/'.$post->id)}}',
                    data: {
                        _token: '{{csrf_token()}}',
                        data : {
                            title: $('#title').val(),
                            body: tinyMCE.activeEditor.getContent()
                        }
                    },
                    success: function(response){
                        if (response.result === true) {
                            location.href = '/backend';
                        } else {
                            alert(response.message);
                            button.html(buttonText).prop('disabled', false);
                        }
                    }
                });
            });

        </script>
        @endpush
    </div>
@endsection