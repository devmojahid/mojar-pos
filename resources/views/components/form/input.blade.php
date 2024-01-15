@props(['name'=>'','label'=>'','type' => 'text','placeholder' => '', 'id' => '', 'class' => '', 'value' => ''])
@if ($type == 'text' || $type == 'email' || $type == 'number')
    <label for="{{ $id == '' ? $name : $id }}">{{ $label }}</label>
    <input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    value="{{ old($name, isset($value) ? $value : '') }}"
    class="form-control @error($name) is-invalid @enderror {{ $class }}" 
    id="{{ $id == '' ? $name : $id }}"
    placeholder="{{ $placeholder }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

@elseif ($type == 'password')
    <label for="{{ $id == '' ? $name : $id }}">{{ $label }}</label>
    <div class="input-group mb-3">
        <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        value="{{ old($name, isset($value) ? $value : '') }}"
        class="form-control @error($name) is-invalid @enderror {{ $class }}" 
        id="{{ $id == '' ? $name : $id }}"
        placeholder="{{ $placeholder }}">
        <div class="input-group-append change_password_field">
            <div class="input-group-text">
                <span class="fas fa-eye"></span>
            </div>
        </div>
    </div>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

@endif