<html>
<head>
    <title>
        Edit Post
    </title>
</head>
<body>
<div>
        <h1>Create Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div>
                <label>Title</label>
                <input type="text" name="title" value="{{$post->title}}">
            </div>
            <div>
                <label>Content</label>
                <textarea name="content" cols="3" rows="5">{{$post->content}}</textarea>
            </div>
            <div>
                <button>Save</button>
            </div>

        </form>
    </div>
</body>
</html>
