<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">

        <div class="max-text">
        <img alt="" class="img-responsive" id="banner1" 
        src="{{ isset($blog)?asset($blog->image):asset('images/upload.jpg') }}" style="width: 30%;"> 
        </div>

        {!! Form::file('image', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
