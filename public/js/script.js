//event pada saat link di klik
$('.page-scroll').on('click', function(){

    //ambil isi href
    var tujuan = $(this).attr('href');

    //tangkap element ybs
    var elemenTujuan = $(tujuan);

    //pindahkan scroll
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 120
    }, 1250, 'easeInOutExpo');

})
