$('.nav-link').on('click', function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('#category').html(kategori);
    console.log(kategori)

    $.getJSON('data.json', function (data) {
        let barang = data.barang;
        let content = '';

        $.each(barang, function (i, data) {
            if (data.kategori == kategori.toLowerCase()) {
                content += '<div class="col-md-3"><div class="card mt-3"> <img src="images/' + data.gambar + '" class="card-img-top" alt="..."><div class="card-body col"><h5 class="card-title">' + data.nama + '</h5><p class="card-text">' + data.deskripsi + '</p><p><strong style="color: orange">Rp. </strong>' + data.harga + '.000</p><a href="#" class="btn btn-aku d-block align-items-center">Beli</a></div></div></div>'
            } 
        })
        $('#list').html(content)

    })

    if (kategori == 'Menu') {
        $.getJSON('data.json', function (data) {
            let barang = data.barang;
        
            $.each(barang, function (i, data) {
                $('#list').append('<div class="col-md-3"><div class="card mt-3"> <img src="images/' + data.gambar + '" class="card-img-top" alt="..."><div class="card-body col"><h5 class="card-title">' + data.nama + '</h5><p class="card-text">' + data.deskripsi + '</p><p><strong style="color: orange">Rp. </strong>' + data.harga + '.000</p><a href="#" class="btn btn-aku d-block align-items-center">Beli</a></div></div></div>')
            })
        })
        
    }
})