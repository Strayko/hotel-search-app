{!! Form::open(['method'=>'POST', 'action'=>'SilverRestaurantController@store', 'files'=>true]) !!}
{{csrf_field()}}
<div class="form-group">
    <h1>Create Gold Restaurant</h1>
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('location_id', 'Location:') !!}
    {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'form-control']) !!}
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