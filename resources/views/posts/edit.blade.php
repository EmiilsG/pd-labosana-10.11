<x-app-layout>
    <h1>Edit post</h1>

    <form action="/posts/{{$post->id}}/" method="post">
        @csrf
        @method('PUT')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{$post->title}}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{$post->content}}</textarea>
        <br>
        <input type="submit" value="Update">
    </form>
     <a href="/posts">All posts</a>
</x-app-layout>
