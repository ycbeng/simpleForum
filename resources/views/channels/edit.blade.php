@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit channel: {{ $channel->title }}</div>

                <div class="panel-body">
                    
                        <form action="{{ route('channels.update',['channel'=>$channel->id]) }}" method="post">
                            <div class="form-group">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="text" class="form-control" name="channel" value="{{ $channel->title }}">
                            </div>
                            <div class="form-group">
                               <div class="text-center">
                                    <button type="submit" class="btn btn-success">Update Channel</button>
                               </div>
                            </div>

                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
