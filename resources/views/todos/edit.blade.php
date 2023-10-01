@extends('layouts.app')

@section('content')

<div class="container">
    <h4 class="text-center my-3 pb-3 text-primary">To Do App</h4>
<form action="{{route('todo.store')}}" class="d-flex justify-content-center align-items-center mb-4" method="POST">
  @csrf
    <div class="row">
        <div class="col-9">                                       
                <input type="text" class="mb-1 "style="outline:none;" id="" name="todo" value="{{$todo->todo}}" placeholder="New Task" class="form-control" >
                @error('todo')
                    <p class="text-danger">{{$message}}</p>
                @enderror
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-primary ms-2 btn-sm">Add</button>
        </div>                                  
    </div>
</form>
</div>
    
@endsection