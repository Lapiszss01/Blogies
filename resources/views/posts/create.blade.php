<x-layout meta-title="Create a new post" meta-description="Form to create a new post">
    <h1>Create a new Post</h1>

    @foreach($errors->all() as $error){
        <p>{{$error}}</p>
    }

    <form method="POST" action={{route('posts.store')}}>
        @csrf
        <label>
            Title <br>
            <input type="text" name="title" required>
        </label>
        <br>
        <label>
            Body <br>
            <textarea name="body" required></textarea>
        </label>
        <br>
        <button type="submit">Send</button>
        <br>
    </form>
    <a href={{route('posts.index')}}>Back</a>
</x-layout>
