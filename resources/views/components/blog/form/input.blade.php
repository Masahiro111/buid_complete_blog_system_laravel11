@props(['type' => 'text', 'name', 'placeholder', 'required' => 'true', 'value'])

<input
       type="{{ $type }}"
       id="{{ $name }}"
       name="{{ $name }}"
       class="form-control"
       placeholder="{{ $placeholder }}"
       value="{{ $value }}"
       {{ $required==='true' ? 'required' : '' }}>

@error($name)
<small class="text-danger">{{ $message }}</small>
@enderror