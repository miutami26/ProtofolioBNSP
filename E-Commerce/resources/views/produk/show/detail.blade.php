<p>
    Rp {{ number_format($produk->Harga, 2, ',', '.') }} |
    Stok : {{ $produk->Stok }} |
    <td>
        @if ($produk->Berat >= 1000)
            {{ number_format($produk->Berat / 1000, 1, ',', '.') }} kg |
        @else
            {{ $produk->Berat }} gram |
        @endif
    </td>
    Warna : {{ $produk->warna }} |
    Diupload : {{ $produk->created_at->diffforHumans() }} |
    Diupdate : {{ $produk->updated_at->diffforHumans() }}
</p>
