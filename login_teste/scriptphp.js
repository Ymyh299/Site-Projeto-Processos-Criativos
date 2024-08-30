const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});


//CPF
function ValidaCPF(){	
	var RegraValidaCPF=document.getElementById("RegraValidaCPF").value; 
	var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;	 
	if (cpfValido.test(RegraValidaCPF) == true)	{ 
	console.log("CPF Válido");	
	} else	{	 
	console.log("CPF Inválido");	
	}
    }
  function fMascCPF(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascExCPF()",1)
}

  function fMascExCPF() {
obj.value=masc(obj.value)
}

   function mCPF(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}
//CRP
function ValidaCRP(){	
	var RegraValidaCRP=document.getElementById("RegraValidaCRP").value; 
	var crpValido = /^(\d{2}\/\d{6}-\d{2})$/; 
	if (crpValido.test(RegraValidaCRP) == true)	{ 
	console.log("CRP Válido");	
	} else	{	 
	console.log("CRP Inválido");	
	}
    }
  function fMascCRP(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascExCRP()",1)
}

  function fMascExCRP() {
obj.value=masc(obj.value)
}

   function mCRP(crp){
crp=crp.replace(/\D/g,"")
crp=crp.replace(/(\d{3})(\d)/,"$1.$2")
crp=crp.replace(/(\d{3})(\d)/,"$1.$2")
crp=crp.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return crp
}
