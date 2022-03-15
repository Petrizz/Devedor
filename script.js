function calcular() {

    var botao = window.document.querySelector('div#botao')
    var inicio = window.document.querySelector('input#inicio')
    var final = window.document.querySelector('input#final')
    var dataHora = window.document.querySelector('input#dataHora')


    if (inicio.value != "" || final.value != "") { //varificando valores null

        var fhora = Number(final.value.substr(0, 2))//peguei apenas a hora
        var fmin = Number(final.value.substr(3))//peguei apenas os minutos

        var ihora = Number(inicio.value.substr(0, 2))//peguei apenas a hora
        var imin = Number(inicio.value.substr(3))//peguei apenas os minutos

        var totalhora = fhora - ihora
        var totalmin


        //não precisa calcular qdo for igual pq os minutos totais vao ser 0
        if (imin > fmin) {
            totalmin = 60 - imin
            totalmin = totalmin + fmin
            totalhora = totalhora - 1
        } else if (imin < fmin) {
            totalmin = fmin - imin
        }

        if (totalhora > 0) { //verificando se a pessoa preencheu horario final como se tivesse voltado no passado

            var confirm = window.confirm(`Hoje você jogou ${totalhora} horas e ${totalmin} minutos\n Suas informações estão corretas?`);

            if (confirm == true) {

                document.querySelector('div#calcular').remove()

                botao.innerHTML = '<div class="col-md-6"><button type="submit" class="btn btn-success float-right">Salvar</button></div>'

            }

        }else {
            alert(`Você não consegue voltar no tempo.\n ${final.value} vem antes de ${inicio.value}\nCorrige e calcula denovo!`)
        }
        
    }else {
        alert("Preencha os campos corretamente!!")
    }
}
