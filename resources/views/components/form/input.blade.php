{{-- وظيفة  البروبس بيهم لارفيل الاتريبيوتس اللي الكومبوننت ده متوقع انه يستقبلها @props --}}
@props([
    'type' => 'text',
    'name',
    'value' => '',
    'label' => false,
])

@if ($label)
<label for="{{$label}}"> {{$label}}</label>
@endif

<input type="{{ $type }}"
       name="{{ $name }}"
       value="{{ old($name, $value) }}" {{-- old check if old (vlaue exist , if not exist put new value) --}}
       {{ $attributes->class([
        'form-control',
        'is-invalid' => $errors->has($name)
       ])}}
    >
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
