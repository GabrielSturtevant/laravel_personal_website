@extends('layouts.app')

@section('header')
    @include('layouts.partials.header')
@endsection

@section('content')
    <div class="container">
        <div class="primary col-md-8 col-sm-12 col-xs-12">
            <section class="section">
                <div class="section-inner">
                    <h2><u>About Me</u></h2>
                    <p>
                        {{ $person->description }}
                    </p>
                </div>
            </section>
            <section class="section">
                <div class="section-inner">
                    <h2>
                        <u>
                            Projects
                        </u>
                    </h2>
                    <div style="margin-left: 15px">
                        @foreach($person->projects as $key => $project)
                            @if($key == 0)
                                {{--TODO: This is the newest project and should have different styling --}}
                                <h1>This is the newest project and should have different styling</h1>
                            @else
                                <h3>{{ $project->name }}</h3>
                                <p>
                                    {!! $project->description !!}
                                </p>
                                <p>
                                    <a class="btn btn-secondary" href="{{ $project->website }}" target="_blank"
                                       role="button">
                                        View details &raquo;
                                    </a>
                                </p>
                            @endif
                            @if($key < count($person->projects)-1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="section-inner">
                    <h2>
                        <u>
                            Experience
                        </u>
                    </h2>
                    <div style="margin-left: 15px">
                        @foreach($person->jobs as $key => $job)
                            <h3>
                                {{ $job->company }}
                            </h3>
                            <p>
                                <strong>
                                    {{ $months[$job->start_date->month] }} {{ $job->start_date->year }}
                                    - {{ $months[$job->end_date->month] }} {{ $job->end_date->year }}
                                </strong>
                            </p>
                            <ul style="padding-left: 30px">
                                @foreach($job->responsibilities as $item)
                                    <li>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                            <p>
                                <a class="btn btn-secondary" href="{{ $job->website }}" target="_blank" role="button">
                                    {{ $job->company }} Website &raquo;
                                </a>
                            </p>
                            @if($key < count($person->jobs)-1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
            <aside class="info aside section">
                <div class="section-inner">
                    <h2 class="heading sr-only">Basic Information</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i><span class="sr-only"> Location:</span>Sylmar, CA</li>
                            <li><i class="fa fa-phone"></i><span class="sr-only"> Phone:</span>{{ $person->phone }}</li>
                            <li><i class="fa fa-envelope-o"></i><span class="sr-only"> Email:</span><a
                                        href="mailto:{{ $person->email }}">{{ $person->email }}</a></li>
                            @foreach($person->websites as $website)
                                <li><i class="fa fa-link"></i><span class="sr-only"> Website:</span><a
                                            href="{{ $website }}" target="_blank">{{ $website }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside>
            <section>
                <div class="section-inner">
                    <h1>
                        <h2>Sidebar</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
                            id ligula
                            porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                            condimentum nibh,
                            ut fermentum massa justo sit amet risus.
                        </p>
                        <p>
                            <a class="btn btn-secondary" href="#" role="button">
                                View details &raquo;
                            </a>
                        </p>
                    </h1>
                </div>
            </section>
        </div>
    </div>
@endsection
