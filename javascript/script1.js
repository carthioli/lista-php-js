function salvar(){

  this.lerdados();
  this.valida();
  this.lista();
}  
function lerdados(){

  nome = document.getElementById('nome').value
  sobrenome = document.getElementById('sobrenome').value
  telefone = document.getElementById('telefone').value
  cidade = document.getElementById('cidade').value
  estado = document.getElementById('estado').value

} 
function valida(){
  msg = '';

  if ( nome == '' ){
    msg += '- informe o campo nome \n '
  }
  if ( sobrenome == '' ){
    msg += ('- informe o campo sobrenome \n ')
  }
  if ( telefone == '' ){
    msg += ('- informe o campo telefone \n ')
  }
  if ( cidade == '' ){
    msg += ('- informe o campo cidade \n ')
  }
  if ( estado == '' ){
    msg += ('- informe o campo estado \n ')
  }
  alert(msg);
  return false;
}



