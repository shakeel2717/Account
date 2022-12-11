<div class="card card-bordered my-4">
    <div class="card-inner-group">
        @foreach (auth()->user()->tids as $tid)
        <div class="card-inner">
            <div class="nk-wg-action">
                <div class="nk-wg-action-content">
                    <em class="icon ni ni-cc-alt-fill"></em>
                    <div class="title">{{ number_format($tid->amount,2) }} Deposit Processing...</div>
                    <p>We are Processing your Deposit Request with the Amount: <b>{{ number_format($tid->amount,2) }}</b> & sent by <b>{{ $tid->gateway->name }}</b> Payment Gateway</p>
                </div>
                <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
            </div>
        </div>
        @endforeach
    </div>
</div>