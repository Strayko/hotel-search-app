{!! Form::open(['method'=>'POST', 'action'=>'SilverRestaurantController@store', 'files'=>true, 'id'=>'regForm']) !!}
{{csrf_field()}}
<div class="tab">

    {!! Form::label('title', 'TITLE', ['class'=>'label-grey-small']) !!}
    {!! Form::text('title', null, ['class'=>'check create-form-input', 'id'=>'title', 'oninput'=>'this.className = "check create-form-input"']) !!}

    {!! Form::label('location_id', 'CITY', ['class'=>'label-grey-small']) !!}
    {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'check create-form-select', 'id'=>'city', 'oninput'=>'this.className = "create-form-select check"']) !!}

    {!! Form::label('address', 'ADDRESS', ['class'=>'label-grey-small']) !!}
    {!! Form::text('address', null, ['class'=>'create-form-input', 'id'=>'address', 'placeholder'=>'example: Passau, Padu Innstrasse', 'onchange'=>'codeAddress()']) !!}
    <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" id="yourBox" class="custom-control-input" />
        <label id="checkbox-text" class="custom-control-label" for="yourBox">Not registered on google map</label>
    </div>

    {!! Form::label('food_id', 'FOOD CATEGORY', ['class'=>'label-grey-small', 'id'=>'margin-top-label']) !!}
    {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'check create-form-select', 'id'=>'food', 'oninput'=>'this.className = "create-form-select check"']) !!}

    {!! Form::label('body', 'RESTAURANT DESCRIPTION', ['class'=>'label-grey-small']) !!}
    {!! Form::textarea('body', null, ['class'=>'check create-form-textarea', 'id'=>'description', 'oninput'=>'this.className = "create-form-textarea check"', 'rows'=>3]) !!}

</div>



<div class="tab">
    {!! Form::label('address2', 'ADDRESS', ['class'=>'label-grey-small']) !!}
    {!! Form::text('address2', null, ['class'=>'create-form-input']) !!}

    {!! Form::label('email', 'EMAIL', ['class'=>'label-grey-small']) !!}
    {!! Form::email('email', null, ['class'=>'create-form-input']) !!}

    {!! Form::label('telephone', 'TEL', ['class'=>'label-grey-small']) !!}
    {!! Form::text('telephone', null, ['class'=>'create-form-input']) !!}

    {!! Form::label('mobile', 'MOB', ['class'=>'label-grey-small']) !!}
    {!! Form::text('mobile', null, ['class'=>'create-form-input']) !!}


</div>



<div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>


</div>
</div>


<div class="form-right">

    <div class="google-maps" id="map_canvas"></div>

    <div class="upload-image">
        <p class="label-grey-image-r">UPLOAD IMAGE</p>
        <button type="button" class="input-file">
            {!! Form::file('photo_id', null, ['class'=>'custom-file-input', 'id'=>'file-input']) !!}
            {!! Form::label('photo_id', 'BROWSE', ['class'=>'custom-file-label', 'id'=>'pointers']) !!}
        </button>
        <hr class="between-fields">
    </div>




    <div class="form-group" style="display:none;">
        {!! Form::label('lat', 'Lat:') !!}
        {!! Form::text('lat', null) !!}
    </div>
    <div class="form-group" style="display:none;">
        {!! Form::label('lng', 'Lng:') !!}
        {!! Form::text('lng', null) !!}
    </div>
{!! Form::close() !!}