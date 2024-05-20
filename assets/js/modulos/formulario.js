
let termos = document.querySelector('#termos-aceitos');
if (termos) {
    termos.addEventListener('change', function(){
        if(termos.checked){
            termos.closest('form').querySelector('button[type="submit"]').removeAttribute('disabled');
        } else {
            termos.closest('form').querySelector('button[type="submit"]').setAttribute('disabled', '');
        }
    });
}

var mascaras = document.querySelectorAll('[mascara]');
if (mascaras) {
    mascaras.forEach(mascara => {
        const tipo = mascara.getAttribute('mascara');

        if (tipo == 'telefone') {
            let telMask = ['(99) 9999-9999', '(99) 99999-9999'];
            VMasker(mascara).maskPattern(telMask[0]);
            mascara.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);
        } else if (tipo == 'cnpj') {
            VMasker(mascara).maskPattern('99.999.999/9999-99');
        }
    });
}

function inputHandler(masks, max, event) {
    var c = event.target;
    var v = c.value.replace(/\D/g, '');
    var m = c.value.length > max ? 1 : 0;
    VMasker(c).unMask();
    VMasker(c).maskPattern(masks[m]);
    c.value = VMasker.toPattern(v, masks[m]);
}