@extends('layout.app', ['title' => 'Create Business'])
@section('content')

<div class="row">
    <div class="col-8">
        @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li class="text text-danger">

                {{ $error }}
            </li>
            
        @endforeach
        </ul>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-8">

        <form action="{{route('business.store')}}" method="post" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group p-1">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            
            <div class="form-group p-1">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            
            <div class="form-group p-1">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group p-1">
                <label for="logo">Phone</label>
                <input type="file"  name="logo" class="form-control" id="logo">
            </div>
            
            <button type="submit" class="btn btn-primary p-1 ">Submit</button>

            
        </form>
    </div>
</div>
@endsection