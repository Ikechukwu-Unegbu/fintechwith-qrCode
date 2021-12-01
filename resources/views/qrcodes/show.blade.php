@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"></h1>
        <h1 class="pull-right">
            @if($qrcode->user_id == Auth::user()->id || Auth::user()->id > 1 )
            <a href="{{ route('qrcodes.edit', [$qrcode->id]) }}" class='btn btn-default '><i class="glyphicon glyphicon-edit"></i>Edit</a>
            @endif 
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
            @include('flash::message')
        <div class="clearfix"></div>

        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                    
                </div>
            </div>
        </div>
    </div>
@endsection
