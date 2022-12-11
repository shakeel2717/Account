@extends('layout.app')
@section('head')
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Reverse Betting</h3>
        <div class="nk-block-des">
            <p>Please Fill the form to continue</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Balance: 0.00</h3>
                </div>
                <div class="nk-data data-list data-list-s2">
                    <form action="{{ route('user.team.store') }}" method="POST">
                        <input type="hidden" name="group_id" id="group_id" value="{{ $group->id }}">
                        <input type="hidden" name="slab_id" id="slab_id" value="{{ $slab->id }}">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" id="amount" placeholder="Enter Amount" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="odds">ODDS (%)</label>
                            <input type="text" name="odds" id="odds" placeholder="ODDS" class="form-control" readonly value="{{ $slab->odds }}">
                        </div>
                        <div class="form-group">
                            <label for="estimated">Estimated Bonus</label>
                            <input type="text" name="estimated" id="estimated" placeholder="Estimated Bonus" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-primary" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
    $(document).ready(function() {
        $("#amount").keypress(function() {
            // updating the estimated value
            var odds = <?php echo $slab->odds ?>;
            var amount = $("#amount").val();
            var total = amount * odds / 100;
            $("#estimated").val(total);
        });
        $("#amount").change(function() {
            // updating the estimated value
            var odds = <?php echo $slab->odds ?>;
            var amount = $("#amount").val();
            var total = amount * odds / 100;
            $("#estimated").val(total);
        });
    });
</script>
@endsection