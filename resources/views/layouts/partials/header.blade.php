{{--NavBar--}}
<!-- Main jumbotron for a primary marketing message or call to action -->
<header class="header jumbotron">
    <div class="container">
        <div style="padding-left: 5%">
            <div class="row">
                <div class="col-lg-2 text-sm-center text-xs-center text-lg-left text-md-center"
                     style="margin-right: 30px">
                    {{--{{ dd($person) }}--}}
                    {{--<img src="{{ url('/') }}/{{ $person->picture->path }}/{{ $person->picture->new_filename }}">--}}
                    <img src="{{ $person->picture->path . '/' . $person->picture->new_filename }}">
                </div>
                <div class="profile-content pull-left">
                    <h1 class="name">Gabriel Sturtevant</h1>
                    <h2 class="desc">Computer Programmer </h2>
                    <ul class="social list-inline">
                        <li><a href="https://www.linkedin.com/in/gabriel-sturtevant-751b8797" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://github.com/GabrielSturtevant" target="_blank"><i
                                        class="fa fa-github-alt"></i></a></li>
                    </ul>
                </div>
                {{--<div class="col-lg-9" style="margin-left: 30px">--}}
                {{--<div class="row text-sm-center text-xs-center text-lg-left text-md-center">--}}
                {{--<a href="{{ url('/') }}" style="color:black;text-decoration: none">--}}
                {{--<h1 class="display-3 header_content name">--}}
                {{--<h1 class="name">--}}
                {{--{{ $person->display_name }}--}}
                {{--</h1>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--<div class="row text-sm-center text-xs-center text-lg-left text-md-center">--}}
                {{--<h2 style="color: #636b6f; margin-top: 0px">--}}
                {{--Computer Programmer--}}
                {{--</h2>--}}
                {{--</div>--}}
                {{--<div class="row text-sm-center text-xs-center text-lg-left text-md-center">--}}
                {{--<a href="{{ $person->github }}" target="_blank">--}}
                {{--<i class="fa fa-github" style="font-size: 36px; color: #636b6f; margin: 1%"></i>--}}
                {{--</a>--}}
                {{--<a href="{{ $person->linkedin }}" target="_blank">--}}
                {{--<i class="fa fa-linkedin" style="font-size: 36px; color: #636b6f; margin: 1%"></i>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</header>
<!-- Branding Image -->

