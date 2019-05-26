@extends('backend.layouts.master')

@section('title', 'Create | Articles')

@section('breadcrumb_header', 'Articles')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('articles.index')}}">Articles</a></li>
    <li class="breadcrumb-item active">create</li>
@endsection

@section('navigation_menu')
    @include('backend.partials.navigation_menu')
@endsection


@section('main_content')
    <div class="card-body collapse in">
        <div class="card-block">
            {{--<div class="card-text"></div>--}}
            <form method="POST" action="{{route('articles.store')}}" class="form form-horizontal">
                {{csrf_field()}}

                <div class="form-body">

                    <h4 class="form-section"><i class="icon-eye6"></i> Article</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="title">Title</label>
                                <div class="col-md-10">
                                    <input maxlength="255" type="text" name="title" id="title" class="form-control border-primary"
                                           placeholder="Title" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="body">Body</label>
                                <div class="col-md-10">
                                    <textarea rows="10" name="body" id="body" class="form-control border-primary"
                                              placeholder="Body" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-actions right">
                    <a href="{{route('articles.index')}}" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
