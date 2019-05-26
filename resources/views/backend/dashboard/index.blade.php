@extends('backend.layouts.master')


@section('main_content')
    {{--<div class="row">--}}
        {{--<div class="col-xs-12">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<h4 class="card-title">Login Successfully !</h4>--}}
                    {{--<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>--}}
                    {{--<div class="heading-elements">--}}
                        {{--<ul class="list-inline mb-0">--}}
                            {{--<li><a data-action="collapse"><i class="ft-minus"></i></a></li>--}}
                            {{--<li><a data-action="expand"><i class="ft-maximize"></i></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    {{--<div class="row">--}}
        {{--<div class="col-xs-12">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<h4 class="card-title">Login Successfully !</h4>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Login Successfully !</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        welcome, {{ucwords(\Auth::user()->name)}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection