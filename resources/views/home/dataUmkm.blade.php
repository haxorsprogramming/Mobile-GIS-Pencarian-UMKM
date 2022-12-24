<div>
    <div style="text-align: center;margin-top:20px;">
        <p class="light">
            Berikut ini adalah data persebaran UMKM di kota sibolga
        </p>
    </div>
    <div>
        <table class="striped highlight">
            <thead>
                <tr>
                    <th>#</th>
                    <th>UMKM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dataUmkm as $umkm)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td><b>{{ $umkm -> nama_usaha }}</b></td>
                <td><a href="javascript:void(0)">Cek Lokasi</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div style="text-align: center;margin-top:20px;">
        <a href="javascript:void(0)" class="btn">Cek lokasi UMKM terdekat</a>
    </div>
</div>


<script>

</script>