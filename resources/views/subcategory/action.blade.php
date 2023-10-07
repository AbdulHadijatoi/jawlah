
<?php
    $auth_user= authSession();
?>
{{ Form::open(['route' => ['subcategory.destroy', $subcategory->id], 'method' => 'delete','data--submit'=>'subcategory'.$subcategory->id]) }}
<div class="d-flex justify-content-end align-items-center">
    @if(!$subcategory->trashed())


        @if($auth_user->can('subcategory delete'))
        <a class="mr-3" href="{{ route('subcategory.destroy', $subcategory->id) }}" data--submit="subcategory{{$subcategory->id}}" 
            data--confirmation='true' 
            data--ajax="true"
            data-datatable="reload"
            data-title="{{ __('messages.delete_form_title',['form'=>  __('messages.subcategory') ]) }}"
            title="{{ __('messages.delete_form_title',['form'=>  __('messages.subcategory') ]) }}"
            data-message='{{ __("messages.delete_msg") }}'>
            <i class="far fa-trash-alt text-danger"></i>
        </a>
        @endif
    @endif
    @if(auth()->user()->hasAnyRole(['admin']) && $subcategory->trashed())
        <a href="{{ route('subcategory.action',['id' => $subcategory->id, 'type' => 'restore']) }}"
            title="{{ __('messages.restore_form_title',['form' => __('messages.subcategory') ]) }}"
            data--submit="confirm_form"
            data--confirmation='true'
            data--ajax='true'
            data-title="{{ __('messages.restore_form_title',['form'=>  __('messages.subcategory') ]) }}"
            data-message='{{ __("messages.restore_msg") }}'
            data-datatable="reload"
            class="mr-2">
            <i class="fas fa-redo text-secondary"></i>
        </a>
        <a href="{{ route('subcategory.action',['id' => $subcategory->id, 'type' => 'forcedelete']) }}"
            title="{{ __('messages.forcedelete_form_title',['form' => __('messages.subcategory') ]) }}"
            data--submit="confirm_form"
            data--confirmation='true'
            data--ajax='true'
            data-title="{{ __('messages.forcedelete_form_title',['form'=>  __('messages.subcategory') ]) }}"
            data-message='{{ __("messages.forcedelete_msg") }}'
            data-datatable="reload"
            class="mr-2">
            <i class="far fa-trash-alt text-danger"></i>
        </a>
    @endif
</div>
{{ Form::close() }}