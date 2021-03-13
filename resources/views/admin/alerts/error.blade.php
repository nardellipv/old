@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/alerts.css') }}">
@endsection

@if (count($errors) > 0)
    <div class="alert alert-danger alert-mg-b alert-st-four" role="alert">
        <i class="fa fa-window-close adminpro-danger-error admin-check-pro" aria-hidden="true"></i>
        <i class="fa fa-times adminpro-danger-error admin-check-pro" aria-hidden="true"></i>
        <p class="message-mg-rt"><strong>Verificar los siguientes errores</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="message-mg-rt">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
