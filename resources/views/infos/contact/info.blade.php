@extends('layouts.index')

@section('content')
    @include('partial.header')
    <div>
        <select class="form-control form-control-lg">
            <option>Large select</option>
        </select>
        <select class="form-control">
            <option>Default select</option>
        </select>
        <select class="form-control form-control-sm">
            <option>Small select</option>
        </select>
    </div>
@endsection

