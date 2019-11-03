@extends('layouts.app')

@section('content')

    @include('snippet.sectionheader', ['title' =>'Anzeigen'])

    <div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary" href="{{ route('advertCreate') }}" >
                    {{ __('neu') }}
                </a>
                <table class="table mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($adverts as $advert)
                        <tr>
                            <td>{{ $advert->id}}</td>
                            <td>{{ $advert->title }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('advertShow', $advert->id) }}" >
                                    {{ __('anzeigen') }}
                                </a>
                                <a class="btn btn-danger" href="{{ route('advertEdit', $advert->id) }}" >
                                    {{ __('edit') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
