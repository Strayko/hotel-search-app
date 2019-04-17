{!! Form::open(['method'=>'POST', 'action'=>'SilverRestaurantController@store', 'files'=>true]) !!}
{{csrf_field()}}
<div class="form-group">
    <h1>Create Silver Restaurant</h1>
    {!! Form::label('title', 'Name:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('location_id', 'City:') !!}
    {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="address">Address Google Map:</label>
    <input type="text" id="address" onchange="codeAddress()" class="form-control" placeholder="example: Passau, Padu Innstrasse">
</div>

<div class="form-group">
    {!! Form::label('food_id', 'Food:') !!}
    {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
</div>
<div class="form-group">
    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group" style="display: none;">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null) !!}
</div>
<div class="form-group" style="display: none;">
    {!! Form::label('lng', 'Lng:') !!}
    {!! Form::text('lng', null) !!}
</div>

<div class="container">
    <div class="form-group">
        <div class="row d-flex justify-content-end">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-utensils"></i> Create Restaurant</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>