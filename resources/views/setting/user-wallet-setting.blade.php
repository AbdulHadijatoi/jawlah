{{ Form::model($wallet,['method' => 'POST','route' => ['enableUserWallet'],'enctype'=>'multipart/form-data','data-toggle'=>'validator']) }}

{{ Form::hidden('id', null, array('placeholder' => 'id','class' => 'form-control')) }}
{{ Form::hidden('page', $page, array('placeholder' => 'id','class' => 'form-control')) }}

<div class="row">
    <div class="form-group col-md-12">
        <label for="enable_cod">{{ __('messages.enable_user_wallet') }}</label>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" name="value" id="enable_cod" {{!empty($wallet->value) ? 'checked' : '' }}>
            <label class="custom-control-label" for="enable_cod"></label>
        </div>
    </div>
</div>

{{ Form::submit(__('messages.save'), ['class'=>"btn btn-md btn-primary float-md-right"]) }}
{{ Form::close() }}
