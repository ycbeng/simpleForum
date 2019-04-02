@extends('layouts.app')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Laravel Forum</div>

                <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($channels as $channel)
                            <tr>
                            <th scope="row">1</th>
                            <td>{{ $channel->title }}</td>
                            <td><a href="{{ route('channels.edit',['channel'=>$channel->id]) }}" class="btn btn-xs btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('channels.destroy',['channel'=>$channel->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            </tr> 
                            @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
@endsection
