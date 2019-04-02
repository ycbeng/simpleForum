@extends('layouts.app')

@section('content')

    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Channels</div>

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
                        @php $index=1; @endphp
                        @foreach($channels as $channel)
                        <tr>
                        <th scope="row">{{ $index++ }}</th>
                        <td>{{ $channel->title }}</td>

                        <td><a href="{{ route('channels.edit',['channel'=>$channel->id]) }} " class="btn btn-xs btn-primary">Edit</a>
                        </td>

                        <td>
                            <form action="{{ route('channels.destroy',['channel'=>$channel->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-primary" type="submit">Delete</button>

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

@section('menu')
<div class="col-md-4">
    
        <div class="panel panel-default">
            <div class="panel panel-heading">
                        Channels
            </div>
            <div class="panel-body">
                <ul class="group-list">
                    @foreach($channels as $channel)
                        <li class="list-group-item">
                            {{ $channel->title }}
                        </li>
                            @endforeach
                </ul>
            </div>
        </div>
                    
             
    
<div>
@endsection