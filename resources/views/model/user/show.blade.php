@extends('layouts.app')

@section('content')
    <header class="header-col3  text-white " style="background-color:#21c87a;min-height: 100px;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 ">
                </div>
                <div class="col-md-8 header-col3-banner">
                    <h2 class="display-4 ">Profil</h2>
                </div>
                <div class="col-md-2 ">
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <div class="row">
            <div class="col-md-3">
                @if ($user->is_company === 0)
                    @include('snippet.card')
                @else
                    @include('snippet.cardcompany')
                @endif
            </div>
            <div class="col-md-9">
            @if ($user->is_company === 0)
                @include('snippet.talent')<br>
                @include('snippet.verify')<br>
                @include('snippet.post')<br>
            @else
                @include('snippet.advert')<br>
            @endif
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <div class="row">
            <div class="col-md-10">

            </div>
            <div class="col-md-2">

            </div>
        </div>
        <!-- /.row -->

    </div>
@endsection
