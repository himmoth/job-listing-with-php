@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="" style="">
            <div class="container py-5 ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-7">
                        <div class="card rounded-3">
                            <div class="card-body p-4">
                                @include('components.message')
                                <h4 class="text-center my-3 pb-3 text-primary">To Do App</h4>
                                <form action="{{route('todo.store')}}" class="d-flex justify-content-center align-items-center mb-4" method="POST">
                                  @csrf
                                    <div class="row">
                                        <div class="col-9">                                       
                                                <input type="text" class="mb-1 "style="outline:none;" id="" name="todo" placeholder="New Task" class="form-control" >
                                                @error('todo')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-primary ms-2 btn-sm">Add</button>
                                        </div>                                  
                                    </div>
                                </form>
                                <form action="">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Update Todo</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group mb-3"> 
                                                   
                                                    <input type="text"  class="form-control" value="{{$edit->todo}}">
                                                </div>                     
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Update</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </form>

                                <table class="table mb-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Todo item</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($todos as $todo)      
                                        <tr>
                                            <th scope="row">{{$loop->iteration }}</th>
                                            <td>{{$todo->todo}}</td>
                                            <td ><p style="border-bottom:1px solid rgb(0, 255, 34); width:fit-content;">In progress</p></td>
                                            <td>
                                                <a href="{{route('todo.edit',$todo->id)}}" >
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                  </a>
                                                <a href="{{route('todo.delete',$todo->id)}}" class="btn btn-danger ms-1 btn-sm">Delete</a>
                                                <a href="{{route('todo.finished',$todo->id)}}" class="btn btn-success ms-1 btn-sm">Finished</a>
                                            </td>
                                        </tr>   
                                        @endforeach                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h3 class="text-center">COMPLETED</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Todo item</th>
                        <th class="float-end" scope="col">Goal</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($dones as $done)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$done->todo}}</td>
                        <td><h5 class="float-end"> <span class="badge bg-success">Done</span></h5></td> 
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
       
    </div>
@endsection
