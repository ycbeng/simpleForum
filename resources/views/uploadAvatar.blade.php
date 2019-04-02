@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Edit Avatar: </div>

                <div class="panel-body">
                    
                        <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                {{ csrf_field() }}
                               
                                <img src="" alt="" width="80px" height="80px">
                                <input type="file" class="form-control" name="avatar" value="">
                            </div> 
                            <div class="form-group">
                               <div class="text-center">
                                    <button type="submit" class="btn btn-success">Upload Avatar</button>
                               </div>
                            </div>

                        </form>
                    
                </div>
            </div>

      
 


@endsection