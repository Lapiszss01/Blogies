<x-layout meta-title="Create a new post" meta-description="Form to create a new post">
    <h1>Create a new Post</h1>



    <form method="POST" action={{route('posts.store')}}>
        @csrf
        <label>
            Title <br>
            <input type="text" name="title" value="{{old('title')}}">
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br>
        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
            <br>
            <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Send</button>
        <br>
    </form>
    <a href={{route('posts.index')}}>Back</a>
</x-layout>
