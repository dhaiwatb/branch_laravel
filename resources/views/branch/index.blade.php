@extends('layout.app', ['title' => 'Branch View'])
@section('content')

<div class="row">
    <div class="col-8">
        <a href="{{route('branch.create')}}" class="btn btn-secondary">Create Branch</a>
    </div>
</div>

@if(session()->has('success'))
<div class="row">
    <div class="col-8">
        <div class="alert alert-primary" role="alert">
            {{ session()->get('success') }}
          </div>
    </div>
</div>
@endif


<div class="row">
    <div class="col-8">
        <table>
           
        </table>
    </div>
</div>



@endsection