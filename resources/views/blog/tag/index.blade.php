@extends('layouts.main')

@section('title', 'Welcome to my Blog')

@section('content')
    <div class="container">
        <div class="row-fluid">
            <div class="span8 offset2">
                <div class="site-header">

                    @include('partials.header')

                </div>  {{-- site-header --}}

                <div class="featured-heading">
                    <div class="row-fluid">
                        <div class="span12">
                            <h4 style="color: #c2a270;">Blog Tags</h4><hr>

                            <table class="table table-stripped" style="color: #fff;">
                                <thead style="color: #c2a270;">
                                    <tr>
                                        <th># No.</th>
                                        <th>Tag Name</th>
                                        <th>Created Date</th>
                                        <th>Modified Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ strip_tags($tag->name) }}</td>
                                        <td>{{ $tag->created_at->diffForHumans() }}</td>
                                        <td>{{ $tag->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-warning" style="background-color:orange;color:#fff;"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        </td>
                                        <td>
                                            {{ Form::open(['method'=>'DELETE', 'route' => ['tag.destroy', $tag->id]]) }}
                                                {{ Form::button('<span class="glyphicon gly glyphicon-trash"></span> Delete',['type'=>'submit','style'=>'background-color:red;color:#fff;','class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @empty
                                    <h4 class="text-center" style="color: #fff;">No tags created yet !</h4>
                                    <a href="{{ route('tag.create') }}" class="btn btn-info">Creat a Tag</a>
                                @endforelse
                                </tbody>
                            </table>
                            <div>
                                <a href="{{ route('tag.create') }}" class="btn btn-info">Creat a Tag</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <span>{{ $tags->links() }}</span>
                </div>
                <div class="site-footer">
                    @include('partials.footer')
                </div>
            </div>
        </div>
    </div>

    <script src="yadah/js/jquery-1.9.1.js"></script>
    <script src="yadah/js/bootstrap.js"></script>
    {{ Html::script('yadah/js/script/carousel.js') }}
    

@endsection
