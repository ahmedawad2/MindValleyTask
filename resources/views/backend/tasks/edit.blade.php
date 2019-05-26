@extends('backend.layouts.master')

@section('title', 'Edit | tasks')

@section('breadcrumb_header', 'tasks')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('tasks.index')}}">tasks</a></li>
    <li class="breadcrumb-item active">edit</li>
@endsection

@section('navigation_menu')
    @include('backend.partials.navigation_menu')
@endsection


@section('main_content')
    <div class="card-body collapse in">
        <div class="card-block">
            {{--<div class="card-text"></div>--}}
            <form method="POST" action="{{route('tasks.update', $task->id)}}" class="form form-horizontal">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-body">

                    <h4 class="form-section"><i class="icon-eye6"></i> tasks</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">Name</label>
                                <div class="col-md-9">
                                    <input value="{{$task->name}}" type="text" name="name" id="name"
                                           class="form-control border-primary"
                                           placeholder="Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="description">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="description" class="form-control border-primary"
                                              placeholder="Description"
                                              required="required">{{$task->description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="card">Project</label>
                                <div class="col-md-9">
                                    <select name="project_id" id="project_id" class="select2 form-control" required>
                                        <option></option>
                                        @foreach($projects as $project)
                                            <option
                                                value="{{$project->id}}"{{$project->id == $task->project_id ? "selected='selected'" : ''}}
                                            ">{{$project->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="card">Status</label>
                                <div class="col-md-9">
                                    <select name="status" id="status" class="select2 form-control" required>
                                        <option></option>
                                        <option
                                            value="in_progress" {{$task->status == 'in_progress' ? "selected='selected'" : ''}}>
                                            In progress
                                        </option>
                                        <option value="done" {{$task->status == 'done' ? "selected='selected'" : ''}}>
                                            Done
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="form-actions right">
                    <a href="{{route('tasks.index')}}" class="btn btn-warning mr-1">
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
