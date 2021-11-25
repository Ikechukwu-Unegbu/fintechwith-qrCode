<div class="col-md-6">
        
    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{{ $qrcode->website }}</p>
    </div>

    <!-- Company Name Field -->
    <div class="form-group">
        {!! Form::label('company_name', 'Company Name:') !!}
        <p>{{ $qrcode->company_name }}</p>
    </div>

    <!-- Product Name Field -->
    <div class="form-group">
        {!! Form::label('product_name', 'Product Name:') !!}
        <p>{{ $qrcode->product_name }}</p>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <p>{{ $qrcode->product_url }}</p>
    </div>

    <!-- Callback Url Field -->
    <div class="form-group">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{{ $qrcode->callback_url }}</p>
    </div>

    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
        <p>{{ $qrcode->qrcode_path }}</p>
    </div>
        
    <!-- Amount Field -->
    <div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        <p>{{ $qrcode->amount }}</p>
    </div>

    <!-- Status Field -->
    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        <p>{{ $qrcode->status }}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $qrcode->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $qrcode->updated_at }}</p>
    </div>

</div>
<div class="col-md-6">
        <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan the QRCode to Pay.') !!}
        <p>
            <img src="{{asset( $qrcode->qrcode_path)}}" alt="">
        </p>
    </div>

</div>



