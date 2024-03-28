<div class="form-group">
    <x-form.input label="Category Name" name="name" id="Category Name" value="{{$category->name}}"/>
</div>
<div class="form-group">
    <label for="parent">Category Parent</label>
    <select name="parent_id" id="parent" class="form-control from-select">
        <option value="">primary category</option>

        @foreach ($parents as $parent)
            <option value="{{ $parent->id }}" @selected(old('parent_id',$category->parent_id)== $parent->id)>{{ $parent->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Description</label>
    <x-form.textarea name="description" :vlaue="$category->description" />
    {{-- <x-form.textarea name="description" label="description" labelTitle="Descreption" :vlaue="$category->description" /> --}}
     {{-- <label for="desc">Description</label>
    <textarea id="desc" name="description" class="form-control">{{ old('description',$category->description) }}</textarea> --}}
</div>

<div class="form-group">
    {{-- <label for="image">Image</label>
     <input type="file" id="image" name="image" class="form-control" accept="image/"> --}}
    <x-form.label id="image">Image</x-form.label>
    <x-form.input type=file name="image"/>
    @if ($category->image)
        <img class="mt-2" src="{{ asset('storage/' . $category->image) }}" height="100" alt="img">
    @endif
</div>

<div class="form-group mx-3">
    <label for="status">status</label>
    <x-form.radio name="status" :checked="$category->status" :options="['active'=>'Active','archived'=>'Archived']" />
    {{-- <div class="form-check">
        <input class="form-check-input" type="radio" name="status" value="active" id="flexRadioDefault1"
            @checked(old('status',$category->status) == 'active')>
        <label class="form-check-label" for="flexRadioDefault1">
            Active
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" value="archived" id="flexRadioDefault2"
            @checked(old('status',$category->status)  == 'archived')>
        <label class="form-check-label" for="flexRadioDefault2">
            Archived
        </label>
    </div> --}}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save' }}</button>
</div>
