<html>

<body>

    <h3>Data Berita</h3>

    <a href="/news/index"> Kembali</a>

    <br />
    <br />

    <form action="/news/update" method="post">
        {{ csrf_field() }}
        <input name="id" type="hidden" value="{{ $data['id'] }}">

        Title <input type="text" name="title" required="required" value="{{ $data['title'] }}"> <br />
        Content <textarea name="content" placeholder=">Enter text here..."> {{ $data['content'] }} </textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
