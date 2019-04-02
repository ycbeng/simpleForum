@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit channel :{{ $channel->title }}</div>
                    <form action="{{ route('channels.update',['channel'=>$channel->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="text" name="channel" class="form-control" value="{{ $channel->title }}">
                        <button type="submit" class="btn btn-success">Update Channel</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
