@extends('layouts.app')

@section('content')

        @foreach($discussion as $d)
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">
                    {{ $d->user->name }}

                    <a href="{{ route('discussion', ['id' => $d->id ]) }}" class="btn btn-xs btn-default pull-right">View</a>
                    
                </div>

                <div class="panel-body">
                    <h5 class="text-center">
                        {{ $d->title }} 
                    </h5>
                    <p class="text-center">
                        {{ str_limit($d->content,50) }}
                    </p>
                                       
                </div>

                <div class="panel-footer">
                    {{ $d->replies->count() }} Replies
                </div>
                                
            </div>
        @endforeach

        <div class="text-center">
            {{ $discussion->links() }}
        </div>
        
@endsection
