{!! Form::model($restaurants, ['method'=>'PATCH', 'action'=>['SilverRestaurantController@update', $restaurants->id], 'files'=>true, 'id'=>'regForm']) !!}
{{csrf_field()}}
<div class="tab">
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location_id', 'City:') !!}
        {!! Form::select('location_id', ['' => 'Choose Location'] + $locations, null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
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
        {!! Form::select('food_id', ['' => 'Choose Food'] + $foods, null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'check form-control', 'oninput'=>'this.className = "form-control check"', 'rows'=>3]) !!}
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
</div>





<div class="tab">
    <h4 class="text-center">Social Networks</h4>
    <div class="form-group">
        {!! Form::label('facebook', 'Facebook:') !!}
        {!! Form::text('facebook', $restaurants->social->facebook, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('twitter', 'Twitter:') !!}
        {!! Form::text('twitter', $restaurants->social->twitter, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('instagram', 'Instagram:') !!}
        {!! Form::text('instagram', $restaurants->social->instagram, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('google', 'Google Plus:') !!}
        {!! Form::text('google', $restaurants->social->google, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="tab">
    <h4 class="text-center">Contact Information</h4>
    <div class="form-group">
        {!! Form::label('address2', 'Address:') !!}
        {!! Form::text('address2', $restaurants->contact->address2, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $restaurants->contact->email, ['class'=>'form-control']) !!}
    </div>
    <div class="form-row">
        <div class="col form-group">
            {!! Form::label('telephone', 'Tel:') !!}
            {!! Form::text('telephone', $restaurants->contact->telephone, ['class'=>'form-control']) !!}
        </div>
        <div class="col form-group">
            {!! Form::label('mobile', 'Mob:') !!}
            {!! Form::text('mobile', $restaurants->contact->mobile, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form row">
        <div class="col form-group">
            <label for="opening">Opening Time:</label>
            <input class="form-control check" type="time" name="opening" id="opening" oninput="this.className = 'form-control check'" value="{!! $restaurants->contact->opening !!}">
            <small class="text-muted">Example: 07:30 AM</small>
        </div>
        <div class="col form-group">
            <label for="closing">Closing Time:</label>
            <input class="form-control check" type="time" name="closing" id="closing" oninput="this.className = 'form-control check'" value="{!! $restaurants->contact->closing !!}">
            <small class="text-muted">Example: 05:30 PM</small>
        </div>
    </div>
</div>
{!! Form::close() !!}
<div style="overflow:auto;">
    <div style="float:right;">
        <button class="btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
</div>
<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

</div>