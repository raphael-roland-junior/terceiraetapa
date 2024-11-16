function mascara_cpf(obj) {
    if (obj.value.length == 3 || obj.value.length == 7) {
        obj.value += ".";
    } else if (obj.value.length == 11) {
        obj.value += "-";
    }
    salto(obj, 'cpf');
  }
  
  function mascara_tel(obj) {
    if (obj.value.length == 0) {
        obj.value += "(";
    } else if (obj.value.length == 3) {
        obj.value += ") ";
    } else if (obj.value.length == 10) {
        obj.value += "-";
    }
  }
  
  function salto(obj, campo) {
    if (campo === 'cpf' && obj.value.length === 14) {
        document.orcamento.telefone.focus();
    }
  }
  
  function gerarCartao() {
    if (validarFormulario()) {
        document.getElementById('resposta').textContent = 'Cartão gerado com sucesso!';
    }
  }
  
  function validarFormulario() {
    let isValid = true;
  
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const telefone = document.getElementById('telefone').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
  
    if (nome === "") {
        isValid = false;
        alert('Por favor, insira seu nome.');
    }
  
    if (telefone === "") {
        isValid = false;
        alert('Por favor, insira seu Telefone.');
    }
  
    if (cpf === "") {
        isValid = false;
        alert('Por favor, insira seu CPF.');
    }
  
    if (email === "") {
        isValid = false;
        alert('Por favor, insira seu e-mail.');
    }
  
    return isValid;
  }

  function confirmar() {
    confirm('Deseja enviar o formulário?');
  }