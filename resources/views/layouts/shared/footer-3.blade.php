

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<footer class="footer footer-alt">
    <script>
        document.write(new Date().getFullYear())
    </script> © Windfoilfan - glissattitude.com
</footer>
