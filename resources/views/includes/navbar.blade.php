@section('navbar')
    {{ $username = null }}
    <script>
        var logged = {!! str_replace("'", "\'", json_encode($username)) !!};
        console.log(logged);

    </script>
    <div class="navbar">
        <div class="container">
            <a class="navitem home" href="\home">MoVik</a>
            <a class="navitem menu" href="\menu">Menu</a>
            <a class="navitem order" href="">Order</a>
            <a class="navitem account" href="javascript:;">{{ $username ?? 'Account' }}</a>
        </div>
        <div class="theme-button">
            <div class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </div>
        </div>
    @show
</div>
@include('includes.login')
@include('includes.register')
