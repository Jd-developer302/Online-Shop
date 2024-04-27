@props(['disabled' => false])

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control w-100 form-control ps-15 bg-transparent']) !!}style="width: 100%; padding: 0.375rem 0.75rem;"/> --}}
<div class="form-group">
    <div class="input-group mb-3">
        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control w-100 form-control ps-15 bg-transparent']) !!} />
    </div>
</div>