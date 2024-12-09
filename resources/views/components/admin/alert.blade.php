<div>
    @if(session('success'))
        <script>
            Swal.fire({
                title: "Great Job!",
                text: "{{session('success')}}",
                icon: "success",
                confirmText: 'OK',
                confirmButton: 'cool'
            })
        </script>
    @elseif(session('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "{{session('error')}}",
                icon: "error",
                confirmText: 'OK',
                confirmButton: 'true'
            })
        </script>
    @endif
</div>
