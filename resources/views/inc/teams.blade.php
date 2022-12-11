<div class="support-topic-item card card-bordered border-primary shadow" style="background-image: url('/assets/images/audience.jpg'); background-size:cover;">
    <a class="card-inner" href="{{ route('user.team.show',['team' => $group->id]) }}">
        <div class="d-flex justify-content-between align-items-center">
            <div class="team1">
                <img src="{{ asset('assets/images/team/') }}/{{ $group->firstTeam->icon }}" alt="Saudia" width="200">
                <br>
                <div class="text-center mt-2">
                    <b>
                        <p>{{ $group->firstTeam->name }}</p>
                    </b>
                </div>
            </div>
            <div class="vs m-2">
                <img src="{{ asset('assets/images/vs.png') }}" alt="Saudia" width="50">
            </div>
            <div class="team2">
                <img src="{{ asset('assets/images/team/') }}/{{ $group->secondTeam->icon }}" alt="Saudia" width="200">
                <br>
                <div class="text-center mt-2">
                    <b>
                        <p>{{ $group->secondTeam->name }}</p>
                    </b>
                </div>
            </div>
        </div>
    </a>
</div>