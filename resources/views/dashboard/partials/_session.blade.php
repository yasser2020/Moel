@if (session('success'))

    <script>
        new Noty({
            type: 'info',
            layout: 'topCenter',
            text: "{{ session('success') }}",
            timeout: 4000,
            killer: true
        }).show();
    </script>

@endif