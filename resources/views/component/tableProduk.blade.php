<main class="table-data add">
    <div>
        <article class="title-data">
            <h3>data Produk</h3>
        </article>
        <table class="data add">
            <thead>
                <tr>
                    <th>add images</th>
                    <th>nama barang</th>
                    <th>harga</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $data)
                <tr>
                    <td class="data-img">
                        <div class="image">
                            <img id="img" src="{{ asset('storage/img/'.$data->foto_produk) }}" alt="" />
                        </div>
                        <img id="cover-img" src="{{ asset('storage/img/'.$data->foto_produk) }}" alt="" />
                    </td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>
                        <div class="data-harga">
                            <h6>Rp.</h6>
                            <h4>{{ $data->harga_produk }}</h4>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.show', $data->id) }}">
                            <button>details</button>
                        </a>
                        <button>hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
