<div>
    <x-input-label for="title" :value="__('Title')"/>
    <x-text-input id="title" name="title" type="text"
    class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<br/>
<div>
    <x-input-label for="body" :value="__('Body')"/>
    <x-textarea id="body" name="body" type="text" value="{{ old('body', $post->body) }}"
    class="block mt-2 w-full mt-1"
    />
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>
<br/>
<div>
    <x-input-label for="publish_date" :value="__('Publish Date')"/>
    <x-input-date id="publish_date" name="publish_date" type="date"/>
    <x-input-error :messages="$errors->get('publish_date')" class="mt-2" />
</div>
