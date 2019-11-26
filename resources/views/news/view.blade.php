<html>

<body>

    <h3>Data Berita</h3>

    <a href="/news/index"> Kembali</a>

    <br />
    <br />


    Title : {{ $data['title'] }} <br />
    Content <textarea name="content" disabled> {{ $data['content'] }} </textarea> <br />

    <a href="/comment/tambah/{{ $data->id }}">Tambah Komentar</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Opsi</th>
        </tr>
        @foreach($listComment as $commentValue)
        <tr>
            <td>{{ $commentValue->id }}</td>
            <td>{{ $commentValue->name }}</td>
            <td>{{ $commentValue->comment }}</td>
            <td>
                <a href="/comment/detail/{{ $commentValue->id }}">Edit</a>
                |
                <a href="/comment/delete/{{ $commentValue->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
