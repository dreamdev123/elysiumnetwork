@extends('_layouts.founders')

@section('meta.title',          __('pages/index.meta_title'))
@section('meta.description',    __('pages/index.meta_description'))
@section('meta.keywords',       __('pages/index.meta_keywords'))


@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_END')
@endsection


@section('content')

    <div class="founders-page founders-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-lg-5 my-5">
                        <div class="row">
                            <div class="col-lg-5">
                                <img class="img-fluid px-4 pb-4" src="{{ asset('images/ElysiumLogo.png') }}">

                                @if (Session::has('success'))
                                    <div class="col-sm-10 offset-sm-12">
                                        <div class="alert alert-success text-center" >
                                            Thank you {{ucfirst(Session::get('first_name'))}} for subscribing to our Founder Launch information.
                                        </div>
                                    </div>
                                @else

                                    <form method="post" action="{{route('marketing::founderslaunch')}}">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @csrf

                                        <div class="founders-bg-form py-4 px-5">
                                            <h1 class="mb-4 text-uppercase">Founders launch</h1>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" name="first_name"
                                                       id="first_name" aria-describedby="emailHelp"
                                                       placeholder="First Name" required value="{{old('first_name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                       aria-describedby="emailHelp" placeholder="Last Name" required
                                                       value="{{old('last_name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">E-mail Address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                       aria-describedby="emailHelp" placeholder="E-mail Address"
                                                       required value="{{old('email')}}">
                                            </div>
                                            <button class="btn btn-danger text-uppercase mt-4 mb-2">
                                                Keep me up to date
                                            </button>
                                        </div>
                                    </form>

                                @endif

                                <img class="img-fluid d-block m-auto px-5 pt-5"
                                     src="{{ asset('images/BeRadical.png') }}">
                            </div>
                            <div class="col-lg-7 d-flex">
                                <img class="img-fluid m-auto px-5 pt-4 px-lg-0 pt-lg-0 img-lion"
                                     src="{{ asset('images/Lion5.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
