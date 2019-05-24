{!! Form::open(['method'=>'POST', 'action'=>'SilverRestaurantController@store', 'files'=>true]) !!}
{{csrf_field()}}
<div class="form-group">
    <h1>Create Platinium Restaurant</h1>
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('location_id', 'City:') !!}
    {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Address Google Map:') !!}
    {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}

    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" id="yourBox" class="custom-control-input" />
        <label id="pointers" class="custom-control-label" for="yourBox">Not registered on google map</label>
    </div>

</div>

<div class="form-group">
    {!! Form::label('food_id', 'Food:') !!}
    {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
</div>


<div class="custom-file mb-3">
    {!! Form::label('photo_id', 'Upload Picture', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
    {!! Form::file('photo_id', null, ['class'=>'custom-file-input']) !!}
</div>
<div class="custom-file mb-3">
    {!! Form::label('pdf_id', 'Upload PDF', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
    {!! Form::file('pdf_id', null, ['class'=>'custom-file-input']) !!}
</div>




<div class="form-group" style="display:none;">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null) !!}
</div>
<div class="form-group" style="display:none;">
    {!! Form::label('lng', 'Lng:') !!}
    {!! Form::text('lng', null) !!}
</div>

<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <div class="form-row">
            <div class="col">
                {!! Form::label('facebook', 'Facebook:') !!}
                {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('twitter', 'Twitter:') !!}
                {!! Form::text('twitter', null, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                {!! Form::label('instagram', 'Instagram:') !!}
                {!! Form::text('instagram', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col">
                {!! Form::label('google', 'Google Plus:') !!}
                {!! Form::text('google', null, ['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group mt-3">
    <div class="row d-flex justify-content-end">

        <div class="col-md-6">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Add social network
                </button>
            </p>

        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-success btn-block"><i class="fas fa-utensils"></i> Create Restaurant</button>
            {!! Form::close() !!}
        </div>

    </div>
</div>

