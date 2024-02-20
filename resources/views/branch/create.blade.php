@extends('layout.app', ['title' => 'Create Branch'])
@section('content')
<div class="row">
    <div class="col-8">
        <form action="{{ route('branch.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group p-1">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            @php $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']   @endphp

            @foreach($days as $key => $value)
            <div class="form-group p-1 d-flex" data-value="{{$key}}" data-day="{{$value}}">
                
                <input type="checkbox" name="{{$value}}" value="{{$value}}" id="{{$value}}" class="form-check m-1">
                <label for="{{$value}}" class="my-auto w-50">{{ ucfirst($value)}}</label>
                <div class="form-group d-flex">

                    <div class="form-outline w-25 mx-1" >
                        <input type="text" name="{{$value}}-from-1" id="{{$value}}-from-1" class=" form-control">
                    </div>
                    <p class="my-auto">-</p>
                    <div class="form-outline w-25" >
                        <input type="text" name="{{$value}}-to-1" id="{{$value}}-to-1" class="w-10 form-control">
                    </div>
                    <button class="btn btn-danger delete-button mx-2">-</button>
                </div>

                <button class="btn btn-primary add-button mx-2">+</button>
            </div>
            <hr class="hr" />
            @endforeach
            

        </form>
    </div>
</div>
@endsection