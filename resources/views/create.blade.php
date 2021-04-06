<html>
<head>
    <title>
        Create Post
    </title>
</head>
<body>
<div>
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" method="post">
        {{ csrf_field() }}
            <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Content</label>
                <textarea name="content" cols="3" rows="5"></textarea>
            </div>
            <div>
                <button>Save</button>
            </div>

        </form>
    </div>
</body>
</html>
