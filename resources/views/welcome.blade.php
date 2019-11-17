@include('snippet.header', ['title' => 'Netzwerk für professionelle "outside the box" - Denker'])

@include('snippet.nav')

<header class="header-col3  text-white " style="background-color: #f82249;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-8 header-col3-banner">
                <h2 class="display-4 ">Öffentliche Mitglieder</h2>
                @guest
                    <div style="padding-top:15px;padding-right:25px;padding-bottom:5px;">
                    <a class="btn btn-dark btn-xl" style="text-transform: lowercase;font-family: monospace;border-radius: 10rem; border: 5px solid #343a40;"  href="{{ route('register') }}">
                     Experten suchen u. kostenlose Anzeigen schalten  </a> </div>
                 @endguest
            </div>
            <div class="col-md-2 ">
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container" style="padding-top: 2rem !important;  padding-bottom: 2rem;">
    <div class="row">
        @if (true)
            @guest
                <div class="alert alert-warning" role="alert">
                    Sie müssen registrieren Sie sich sich!
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Es sind keine Profile öffentlich geschaltet!
                </div>
            @endguest
        @else
            @foreach ($users as $user)
                <div class="col-xl-3 col-md-6 mb-4">
                    @include('snippet.card')
                </div>
            @endforeach
        @endif
    </div>
    <!-- /.row -->
</div>

@include('snippet.footer')
