@extends('layouts.app_cliente')

@section('template_title')
    {{ __('Create') }} Cliente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Cliente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store', ['id' => $id]) }}"  role="form" enctype="multipart/form-data">
                            {{ Form::hidden('id_pedido', $id) }}
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
