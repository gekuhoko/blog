@extends('template')

@section('content')
    <div class="main-content col-md-12">
        {{App\MobileDevice::all()->count()}} devices registered for web push<BR>
        {{App\Email::all()->count()}} emails registered for newsletter<BR><BR>
        <a class="btn btn-success" href="/backend/create" onclick="(this).prop('disabled', true)">Create</a><BR><BR>
        @foreach ($posts as $post)
            <div class="row" style="border:1px solid lightgrey; padding:10px;">
                <div class="col-md-5">
                    <h6>{{$post->title}}</h6>
                    <a href="{{url('/'.$post->slug)}}">{{url('/'.$post->slug)}}</a><BR>
                    @if($post->isScheduled())
                        Scheduled at {{$post->formattedScheduledAt()}}
                    @endif
                </div>
                <div class="col-md-7" style="border-left:1px solid lightgrey">
                    <button class="btn btn-info notify-button" onclick="notifyPost({{$post->id}})" @if($post->notified_at) disabled="disabled" @endif>Notify Followers</button>
                    <a class="btn btn-default" href="/backend/edit/{{$post->id}}" onclick="(this).prop('disabled', true)">Edit</a>
                    <button class="btn btn-danger delete-button" onclick="deletePost({{$post->id}})">Delete</button>
                </div>
            </div>
        @endforeach
    </div>

    @push('scriptPush')
        <script>
            function deletePost(postId) {
                swal({
                    title: "Are you sure to delete the post?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: true
                }, function(){
                    $('.delete-button').prop('disabled', true);
                    $.ajax({
                        type: 'POST',
                        url: '/backend/delete/' + postId,
                        data: {
                            _token: '{{csrf_token()}}',
                            data : {}
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                });
            }

            function notifyPost(postId) {
                swal({
                    title: "Are you sure to notify the follower about the post?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: true
                }, function(){
                    $('.notify-button').prop('disabled', true);
                    $.ajax({
                        type: 'POST',
                        url: '/backend/notify/' + postId,
                        data: {
                            _token: '{{csrf_token()}}',
                            data : {}
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                });
            }
        </script>
    @endpush
@endsection