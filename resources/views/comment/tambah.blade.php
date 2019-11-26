<html>

<body>

    <h3>Data Komentar</h3>

    <a href="/comment/index"> Kembali</a>

    <br />
    <br />

    <form action="/comment/create" method="post">
        {{ csrf_field() }}
        <input name="id" type="hidden" value="{{ $id }}">

        Name <input type="text" name="name" required="required"> <br />
        Comment <textarea name="comment" placeholder=">Enter text here..."> </textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
