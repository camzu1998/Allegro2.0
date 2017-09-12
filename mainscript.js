function inputs(){
    $('.inputs').hide(100);
    $('.info').hide(100);
    $('.photo').hover(function(){
        $('.inputs').show( 750 );
        $('.info').show( 500 );
    });

}
function wynik(){
    const vat = 0.23;
    const cHDD = 120;
    const cGPU = 450;
    const cCPU = 600;
    const cRam = 80;
    var iloscRamu = $('#iloscRam').val()*cRam;
    var iloscCPU = $('#iloscCPU').val()*cCPU;
    var iloscHDD = $('#iloscHDD').val()*cHDD;
    var iloscGPU = $('#iloscGPU').val()*cGPU;

    var wynik1 = iloscCPU+iloscGPU+iloscHDD+iloscRamu;
    var wynik2 = wynik1*vat;
    var wynik = wynik1+wynik2;
    $('#wynik').text("Do zapłaty:"+wynik+" zł.");
}
