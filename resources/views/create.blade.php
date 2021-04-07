<html>
<head>
    <title>
        Create Post
    </title>
    <style>
                    body {
                        font-family: 'Nunito', sans-serif;
                    }
                    .btn-link {
                        font-weight: 400;
                        text-decoration: none;
                        color: white;
                        padding: 0.5em;
                        margin: 0.5em
                    }
                    .primary {
                        background-color: #007bff;
                    }

                </style>
</head>
<body>
<div>
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" method="post">
        {{ csrf_field() }}
            <div>
                <label>Title</label><br>
                <input type="text" name="title">
            </div>
            <div>
                <label>Content</label><br>
                <textarea name="content" cols="30" rows="5"></textarea>
            </div>
            <div>
                <button class="btn-link primary">Save</button>
            </div>

        </form>
    </div>
</body>
</html>
