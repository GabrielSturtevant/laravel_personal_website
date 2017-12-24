@extends('layouts.app')

@section('content')
    <div class="container">
        {{--Left wide column: Contains many rows--}}
        <div class="col-lg-8">
            <div class="row">
                <h2>About Me</h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui.
                </p>
                <p>
                    <a class="btn btn-secondary" href="#" role="button">
                        View details &raquo;
                    </a>
                </p>
            </div>
            <div class="row">
                <h2>Projects</h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui.
                </p>
                <p>
                    <a class="btn btn-secondary" href="#" role="button">
                        View details &raquo;
                    </a>
                </p>
            </div>

        </div>
        {{--Right narrow column: Contains many rows--}}
        <div class="col-lg-4">
            <div class="row">
                <h2>Sidebar</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                    ut fermentum massa justo sit amet risus.
                </p>
                <p>
                    <a class="btn btn-secondary" href="#" role="button">
                        View details &raquo;
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
