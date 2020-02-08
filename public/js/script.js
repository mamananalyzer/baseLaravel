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

//about
// $('window').on('load', function(){
//     $('pKiri').addClass('pShow');
// });

//parralax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    //jumbotron
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    })
    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2.5 +'%)'
    })
    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    })

    //contact
    if(wScroll > $('.portfolio').offset().top - 300) {
        $('portfolio .thumbnail')
        $('.portfolio .thumbnail').addClass('show');
    }

    //about
    if(wScroll > $('.pKiri').offset().top - 200) {
        $('.pKiri').addClass('pShow');
    }
    if(wScroll > $('.pKanan').offset().top - 200) {
        $('.pKanan').addClass('pShow');
    }

})
