@php

    $name ??= '';
    $label ??= ucfirst($name);
    $type ??= 'text';
    $value ??= "";
    $required ??= true;
    $class ??= null;

@endphp

<div @class(['form-group mb-3', $class])>

    <label class="form-label" for="{{ $name }}">
        {{ __($label) }}
        @if($required)
            <span class="text-danger fw-bold">*</span>
        @endif
    </label>

    @if($type == 'textarea')
        <textarea id="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
                  name="{{ $name }}" @required($required) rows="3"
        >{{ old($name, $value) }}</textarea>
    @else
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
               name="{{ $name }}" value="{{ old($name, $value) }}" @required($required) >
    @endif

    @error($name)
    <p class='invalid-feedback' role="alert">
            <span>
                <strong> {{ $message }}</strong>
            </span>
    </p>
    @enderror

</div>
