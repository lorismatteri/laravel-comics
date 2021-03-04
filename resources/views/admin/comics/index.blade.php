@extends('layouts.dashboard')

@section('content')
    <h1>All comics for admin</h1>
    <a href="{{route('admin.comics.create')}}" class="btn bg-primary mb-2 float-right">Crea nuovo comic</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic) 
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->name}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->created_at}}</td>
                <td>{{$comic->updated_at}}</td>
                <td>
                    <a href="{{route('admin.comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">
                        <i class="fas fa-eye fa-lg fa-fw"></i>
                    </a>   
                    <a href="{{route('admin.comics.edit', ['comic' => $comic->id])}}" class="btn btn-warning">
                        <i class="fas fa-pen fa-lg fa-fw"></i>
                    </a>
                    
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$comic->id}}">
                        <i class="fas fa-trash fa-lg fa-fw"></i>
                    </button>

                    <div class="modal fade" id="destroy-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="comic-destroy-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="comic-destroy-{{$comic->id}}">Delete Comic {{$comic->name}} </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{route('admin.comics.destroy', ['comic' => $comic->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
    
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>    
        
@endsection