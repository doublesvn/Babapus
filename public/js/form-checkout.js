var btnBeli = document.getElementById('btnBeli')
btnBeli.addEventListener('click', function(){
    var namaIkan = document.getElementById('namaIkan').textContent
    var namaProduk = document.getElementById('namaProduk')
    const jmlOrder = document.getElementById('jml-pesanan').value
    var jmlPesanan = document.getElementById('jmlPesan')
    var hargaIkan = document.getElementById('hargaIkan').textContent
    const hargaProduk = document.getElementById('hargaProduk')
    var subtotal = 0
    subtotal = parseFloat(hargaIkan.replace("Rp", " ")) * jmlOrder
    var promo = document.getElementById('promo').textContent
    var totalPromo = 0
    totalPromo = parseFloat(promo.replace("-Rp", " "))
    var total = document.getElementById('total')

    jmlPesanan.innerText = jmlOrder
    namaProduk.innerText = namaIkan
    hargaProduk.innerText = 'Rp ' + subtotal
    total.innerText = 'Rp ' + (subtotal - totalPromo)

})