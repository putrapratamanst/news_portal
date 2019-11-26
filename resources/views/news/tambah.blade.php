<html>

<body>

    <h3>Data Berita</h3>

    <a href="/news/index"> Kembali</a>

    <br />
    <br />

    <form action="/news/create" method="post">
        {{ csrf_field() }}
        Title <input type="text" name="title" required="required"> <br />
        Content <textarea name="content" placeholder=">Enter text here..."> </textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
