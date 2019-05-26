@extends('backend.layouts.master')

@section('title', 'Index | Articles')

@section('breadcrumb_header', 'Articles')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('articles.index')}}">Articles</a></li>
    <li class="breadcrumb-item active">index</li>
@endsection

@section('navigation_menu')
    @include('backend.partials.navigation_menu')
@endsection


@section('development_css')
    @include('backend.partials.datatables.dt_css')
    @include('backend.partials.ldsRing_css')
@endsection

@section('main_content')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-3">
                    <a href="{{route('articles.create')}}">
                        <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">Add Article</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    {{--<h4 class="card-title">Responsive tables</h4>--}}
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
                        <table id="articles" class="table table-bordered border-solid table-sm mb-0">
                            <thead class="thead-inverse">
                            <tr>
                                <th style="text-align: center;">Title</th>
                                <th style="text-align: center;">Created At</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-striped table-hover">
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->created_at->format(\App\Http\Controllers\Controller::DEFAULT_DATE_FORMAT)}}</td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal"
                                                data-target="#deleteModal{{$article->id}}"><i class="fa fa-trash"></i>
                                        </button>
                                        <a target="_blank" href="{{route('articles.edit', $article->id)}}"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-edit"></i></button></a>

                                    </td>
                                </tr>

                                <div class="modal fade text-xs-left" id="deleteModal{{$article->id}}" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel10"
                                     aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="{{route('articles.destroy', $article->id)}}">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger white">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel10">Delete Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    are you sure you want to delete ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn grey btn-outline-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button id="saveDelete" type="submit"
                                                            class="btn btn-outline-danger">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
