<main class="container add-produk">
    <div>
        <article class="title-add">
            <h4>tambah produk</h4>
        </article>
        <form action="{{ route('dashboard.store') }}" method="POST" class="form add" enctype="multipart/form-data">
            @csrf
            <div>
                <section class="input-img">
                    <div>
                        <div class="input-file">
                            <input type="file" name="img_produk" id="image-input" accept="image/*" />
                        </div>
                        <figure class="img-prev">
                            <img src="" id="image-preview" />
                        </figure>
                        <div class="ico-img">
                            <i class='bx bxs-image'></i>
                        </div>
                    </div>
                </section>
                <section class="input">
                    <input type="text" name="nama_produk" placeholder="Nama Produk" />
                </section>
                <section class="input">
                    <input type="text" name="hrg_produk" placeholder="Harga Produk" />
                </section>
                <section class="input">
                    <textarea name="desk_produk" id="" placeholder="Deskripsi"></textarea>
                </section>
                <section class="btn add">
                    <button type="submit">tambah</button>
                </section>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="pop-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color: yellow">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</main>
<script>
    document.getElementById('image-input').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
    console.log("File ditemukan:", file.name); // Debugging
    const reader = new FileReader();
    reader.onload = function(e) {
    console.log("File berhasil dibaca"); // Debugging
    const preview = document.getElementById('image-preview');
    preview.src = e.target.result;
    preview.style.display = 'block';
    };
    reader.readAsDataURL(file);
    } else {
    console.log("Tidak ada file yang dipilih"); // Debugging
    }
    });
</script>