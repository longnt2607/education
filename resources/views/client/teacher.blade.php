<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset=UTF-8>
    <title>Viết bài</title>
    <link href="{{ asset('assets/client/css/style-teacher.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="">
            <div class="input-field">
                <label for="title">Tiêu đề</label>
                <input type="text" name="Article_title" id="title">
            </div>
            <textarea name="Article_content" id="editor"></textarea>
            <input type="submit" class="publish-btn" name="submit_data" value="Đăng bài">
        </form>
    </div>
    
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
</html>