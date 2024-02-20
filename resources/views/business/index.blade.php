@extends('layout.app', ['title' => 'Business View'])
@section('content')
    <div class="row">
        <div class="col-8">
            <a href="{{route('business.create')}}" class="btn btn-secondary">Create Business</a>
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
            <table class="table table-bordered m-2 datatable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>

                    </tr>
                </thead>
                <tbody>
                    @if(count($business) > 0)
                    @foreach($business as $company)
                        <tr>
                            <td class="d-flex ">
                                <img src="{{ asset('storage/logo/'.$company['logo']) }}" alt="" style="width: 100px; height: 100px;">
                                <p>{{ $company['name'] }}</p>
                            </td>
                            <td>
                                {{$company['email']}}
                            </td>
                            <td>
                                {{ $company['phone_number'] }}
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3">No company found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
@endsection