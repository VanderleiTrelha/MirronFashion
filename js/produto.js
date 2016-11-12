var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valortamanho]');

inputTamanho.oninput = mostraTamanho;

function mostraTamanho() {
	outputTamanho.value = inputTamanho.value;
}