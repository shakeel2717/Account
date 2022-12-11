@extends('layout.app')
@section('content')
@include('inc.teams')
<br>
@foreach ($slabs as $slab)
<div class="card card-bordered border-primary">
    <div class="card-inner">
        <div class="d-flex justify-content-between align-items-center">
            <h4>{{$slab->score}}</h4>
            <h4>{{$slab->odds}}%</h4>
            <form action="{{ route('user.team.update',['team' => $slab->id]) }}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="group_id" value="{{ $group->id }}">
                <button type="submit" class="btn btn-outline-primary">Buy</button>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection