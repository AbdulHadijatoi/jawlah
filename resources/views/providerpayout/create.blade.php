<x-master-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-block card-stretch">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h5 class="font-weight-bold">{{ $pageTitle ?? trans('messages.list') }}</h5>
                        <a href="{{ route('earning') }}" class="float-right btn btn-sm btn-primary"><i class="fa fa-angle-double-left"></i> {{ __('messages.back') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                {{ Form::model($payoutdata,['method' => 'POST','route'=>'providerpayout.store', 'enctype'=>'multipart/form-data', 'data-toggle'=>"validator" ,'id'=>'providerpayout'] ) }}
                    {{ Form::hidden('provider_id') }}
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{ Form::label('method',trans('messages.method').' <span class="text-danger">*</span>',['class'=>'form-control-label'],false) }}
                                {{ Form::select('payment_method',['bank' => __('messages.bank') , 'cash' => __('messages.cash'), 'wallet' => __('messages.wallet') ],old('method'),[ 'id' => 'method' ,'class' =>'form-control select2js','required']) }}
                            </div>
                            <div class="form-group col-md-12 ">
                                {{ Form::label('description',__('messages.description'), ['class' => 'form-control-label']) }}
                                {{ Form::textarea('description', null, ['class'=>"form-control textarea" , 'rows'=>3  , 'placeholder'=> __('messages.description') ]) }}
                            </div>
                            <div class="form-group col-md-12">
                                {{ Form::label('amount',__('messages.amount'), ['class' => 'form-control-label']) }}
                                {{ Form::number('amount',old('amount'),['placeholder' => __('messages.amount'),'class' =>'form-control', 'required', 'step' => 'any', 'min' => 0, 'max' => $payoutdata->amount ?? 0]) }}
                            </div>
                        </div>
                    {{ Form::submit( trans('messages.save'), ['class'=>'btn btn-md btn-primary float-right']) }}
                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
</x-master-layout>
