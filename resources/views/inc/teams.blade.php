@foreach ($groups as $group)
<div class="support-topic-item card card-bordered border-primary shadow">
    <a class="card-inner" href="#">
        <div class="d-flex justify-content-between align-items-center">
            <div class="team1">
                <img src="{{ asset('assets/images/team/') }}/{{ $group->firstTeam->icon }}" alt="Saudia" width="200">
            </div>
            <div class="vs m-2">
                <img src="{{ asset('assets/images/vs.png') }}" alt="Saudia" width="50">
            </div>
            <div class="team2">
                <img src="{{ asset('assets/images/team/') }}/{{ $group->secondTeam->icon }}" alt="Saudia" width="200">
            </div>
        </div>
    </a>
</div>
@endforeach