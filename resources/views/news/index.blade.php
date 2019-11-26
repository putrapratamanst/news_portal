<!DOCTYPE html>
<html>


<body>


    <h3>Data Berita</h3>

    <a href="/news/tambah"> + Tambah Berita</a>

    <br />
    <br />

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th>Opsi</th>
        </tr>
        @foreach($list as $newsValue)
        <tr>
            <td>{{ $newsValue->id }}</td>
            <td>{{ $newsValue->title }}</td>
            <td>{{ $newsValue->content }}</td>
            <td>{{ $newsValue->created_date }}</td>
            <td>
                <a href="/news/view/{{ $newsValue->id }}">Lihat</a>
                |
                <a href="/news/detail/{{ $newsValue->id }}">Edit</a>
                |
                <a href="/news/delete/{{ $newsValue->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>
