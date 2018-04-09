<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/worker.js')
        .then(function(reg) {
            reg.pushManager.subscribe({userVisibleOnly: true})
                    .then(function(sub) {
                        {{-- todo: push sub.endpoint via ajax to db --}}
                        console.log('endpoint:', sub.endpoint);
                        {{-- document.write(sub.endpoint); --}}

                        $.ajax({
                            type: 'POST',
                            url: '{{url('/api/push-notification/register')}}',
                            data: {
                                device: sub.endpoint,
                                _token: '{{csrf_token()}}'
                            },
                            success: function(response){
                                // registered
                            }
                        });
                    });
        })
        .catch(function(err) {
            console.log(':^(', err);
        });
    }
</script>