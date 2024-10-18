<div>
    <x-input-label for="title" :value="__('Title')"/>
    <x-text-input id="title" name="title" type="text" value="{{ old('title', $post->title) }}"
    class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<br/>
<div>
    <x-input-label for="body" :value="__('Body')"/>
    <x-textarea id="body" name="body" type="text" value="{{ old('title', $post->body) }}"
    class="block mt-2 w-full mt-1"
    />
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>
