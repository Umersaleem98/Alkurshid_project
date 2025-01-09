@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alert("{{ session('success') }}");
        });
    </script>
@endif

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let errorMessage = `{{ implode('\\n', $errors->all()) }}`;
            alert(errorMessage);
        });
    </script>
@endif
