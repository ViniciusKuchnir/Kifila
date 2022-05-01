//Máscara para o campo de CPF do usuário "Pessoa Física"
let cpf = document.getElementById('user-cpf');
let maskCpfOptions = {
  mask: '000.000.000-00'
};
let maskCpf = IMask(cpf, maskCpfOptions);

//Máscara para o campo de CNPJ do usuário "Pessoa Jurídica"
let cnpj = document.getElementById('user-cnpj');
let maskCnpjOptions = {
  mask: '00.000.000/0000-00'
};
let maskCnpj = IMask(cnpj, maskCnpjOptions);

function verificaNome(name) {
  if(name.value.length > 2){
    if(!$('#help-name').hasClass('hidden')){
      $('#help-name').addClass('hidden')
    }
  }else{
    if ($('#help-name').hasClass('hidden')) {
      $('#help-name').removeClass('hidden')
    }
  }
}

function verificaEmail(email) {
  var reg = /\S+@\S+\.\S+/;
  if(reg.test(email.value)){
    if(!$('#help-email').hasClass('hidden')){
      $('#help-email').addClass('hidden')
    }
  }else{
    if ($('#help-email').hasClass('hidden')) {
      $('#help-email').removeClass('hidden')
    }
  }
}

function verificaSenha(senha){
  if(senha.value.length >= 8 && senha.value.length <=16){
    if(!$('#help-password').hasClass('hidden')){
      $('#help-password').addClass('hidden')
    }
  }else{
    if ($('#help-password').hasClass('hidden')) {
      $('#help-password').removeClass('hidden')
    }
  }
}

function handleChangeUser(e){
  if (e.value == 'user') {
    if ($('.user-pf').hasClass('hidden')) {
      $('.user-pf').removeClass('hidden');
      $('.user-pj').addClass('hidden');
    }else{
      $('.user-pf').addClass('hidden');
      $('.user-pj').removeClass('hidden');
    }
  }else{
    if ($('.user-pj').hasClass('hidden')) {
      $('.user-pj').removeClass('hidden');
      $('.user-pf').addClass('hidden');
    }else{
      $('.user-pj').addClass('hidden');
      $('.user-pf').removeClass('hidden');
    }
  }
}