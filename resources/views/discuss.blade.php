@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Create a new disscussion</div>

                <div class="panel-body">
                    
                        <form action="{{ route('discussions.store') }}" method="post">
                            <div class="form-group">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="content">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <label for="channel">Pick a channel</label>
                            
                                <select name="channel_id" id="channel_id" class="form-control">
                                    @foreach($channels as $channel)
                                        <option value="{{ $channel->id }}">{{ $channel->title }}</option>
                                    @endforeach
                                </select>                               
                            </div>

                            <div class="form-group">
                                <label for="content">Ask a question</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div>
                                <button class="btn btn-success pull-right" type="submit">Create Discussion</button>
                            </div>

                        </form>
                    
                </div>
            </div>
        
@endsection