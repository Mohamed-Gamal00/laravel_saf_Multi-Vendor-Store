<div>
    @if (session()->has($type))
        <div class="alert alert-{{$type}} text-center">
            {{ session($type) }}
        </div>
    @endif
</div>
