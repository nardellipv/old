@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/alerts.css') }}">
@endsection

<div class="alert-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            @forelse($notifications as $notification)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 3%">
                <div class="alert-icon shadow-reset wrap-alert-b">
                    <div class="alert-title">
                        <h2>Notificación creada: <span class="text-muted">{{ \Carbon\Carbon::parse($notification->created_at)->format('d/m/Y') }}</span></h2>
                    </div>                    
                    <div class="alert alert-info alert-st-two" role="alert">
                        <i class="fa fa-info-circle adminpro-inform admin-check-pro" aria-hidden="true"></i>
                        <p class="message-mg-rt"><strong>{{ $notification->text }}  </p>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
</div>