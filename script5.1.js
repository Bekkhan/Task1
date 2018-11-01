function MatrixDeterm(){
	let num = document.querySelectorAll('input')
	let ResDeterminantMatrix = 0;
ResDeterminantMatrix = (num[0].value * num[4].value * num[8].value + 
	num[1].value * num[5].value * num[6].value + 
	num[2].value * num[3].value * num[7].value) - 
	(num[2].value * num[4].value * num[6].value + 
	num[1].value * num[3].value * num[8].value +
	num[0].value * num[5].value * num[7].value)   
document.querySelector('#result').innerHTML = ResDeterminantMatrix;	
}
document.querySelector('#determinant').addEventListener('click', MatrixDeterm);
