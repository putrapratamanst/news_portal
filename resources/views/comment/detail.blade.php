<html>

<body>

    <h3>Data Comment</h3>

    <a href="/news/view/{{ $data['news_id'] }}"> Kembali</a>

    <br />
    <br />
    <form action="/comment/update" method="post">
        {{ csrf_field() }}
        <input name="id" type="hidden" value="{{ $data['id'] }}">

        Name <input type="text" name="name" required="required" value="{{ $data['name'] }}"> <br />
        Comment <textarea name="comment" placeholder=">Enter text here..."> {{ $data['comment'] }} </textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
