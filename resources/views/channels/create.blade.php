@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Create a new channel</div>

                <div class="panel-body">
                    
                        <form action="{{ route('channels.store') }}" method="post">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <input type="text" class="form-control" name="channel">
                            </div>
                            <div class="form-group">
                               <div class="text-center">
                                    <button type="submit" class="btn btn-success">Save Channel</button>
                               </div>
                            </div>

                        </form>
                    
                </div>
            </div>
        
@endsection
