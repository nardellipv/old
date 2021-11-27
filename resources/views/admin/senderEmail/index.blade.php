@extends('layouts.mainAdmin')

@section('content')
<div class="product-status mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Lista de emails</h4>
                    <table>
                        <tr>
                            <th>Emails</th>
                            <th>Activo</th>
                            <th>Acción</th>
                        </tr>
                        @foreach ($emails as $email)
                        <tr>
                            <td>{{ $email->name }}</td>
                            <td>{{ $email->active == 'Y' ? 'Si' : 'No' }}</td>
                            <td>
                                @if($email->active == 'Y')
                                <a href="{{ route('senderMailDeactive.update', $email) }}">
                                    <i class="fa fa-check fa-2x"
                                        style="color:blue"></i>
                                </a>
                                @else
                                <a href="{{ route('senderMailActive.update', $email) }}">
                                    <i class="fa fa-times fa-2x"
                                        style="color:red"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection