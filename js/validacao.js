function validarCPF(cpf) {
  cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos

  if (cpf.length !== 11) {
    return false;
  }

  // Verifica se todos os dígitos são iguais, o que torna o CPF inválido
  if (/^(\d)\1+$/.test(cpf)) {
    return false;
  }

  // Calcula o primeiro dígito verificador
  var soma = 0;
  for (var i = 0; i < 9; i++) {
    soma += parseInt(cpf.charAt(i)) * (10 - i);
  }
  var resto = soma % 11;
  var digitoVerificador1 = (resto < 2) ? 0 : 11 - resto;

  // Calcula o segundo dígito verificador
  soma = 0;
  for (var j = 0; j < 10; j++) {
    soma += parseInt(cpf.charAt(j)) * (11 - j);
  }
  resto = soma % 11;
  var digitoVerificador2 = (resto < 2) ? 0 : 11 - resto;

  // Verifica se os dígitos verificadores calculados são iguais aos dígitos verificadores do CPF
  if (parseInt(cpf.charAt(9)) !== digitoVerificador1 || parseInt(cpf.charAt(10)) !== digitoVerificador2) {
    return false;
  }

  return true;
}

function validarInputCPF() {
  var cpfInput = document.getElementById("cpf");
  var cpf = cpfInput.value;

  if (validarCPF(cpf)) {
    cpfInput.setCustomValidity('');
  } else {
    cpfInput.setCustomValidity('CPF inválido');
    cpf = '';
  }
}
//Valida a senha
let senha = document.getElementById("senha");
let enviar = document.getElementById("enviar")
enviar.addEventListener('click', function () {
  let regex = /^[0-9]+$/; // Expressão regular para permitir apenas números

  if (!senha.value.match(regex)) {
    senha.setCustomValidity('A senha deve conter 8 números');
    senha.value = '';
    return false;
  }
  return true;
});