function sendFile()
{
    let form = document.querySelector('#formFile')
    form = new FormData(form)

    $.ajax({
        url: "./app/controllers/indexController.php",
        type: "post",
        data: form,
        dataType: 'json',
        processData: false,  
        contentType: false,
        success: (res) => alert( res.responseText ),
        error: (err) => alert( err.responseText )
    })
}

$.ajax({
    url: "./../app/controllers/getDataController.php",
    type: "get",
    success: res => populeTable(JSON.parse(res)),
    error: err => console.log(err)
})

function populeTable(dados)
{
    dados.forEach( item => {

        let cep     = item.CEP
        let cpf     = item.CPF
        let uf      = item.UF
        let bairro  = item.bairro
        let cNF     = item.cNF
        let cPais   = item.cPais
        let dtEmi   = item.dhEmi
        let email   = item.email
        let id      = item.id
        let vlrNF   = item.vNF
        let xMun    = item.xMun
        let xNome   = item.xNome  
        
        $("table>tbody").append(`
            <tr>
                <td>${id}</td>
                <td>${cNF}</td>
                <td>${dtEmi}</td>
                <td>${vlrNF}</td>
                <td>${cpf}</td>
                <td>${xNome}</td>
                <td>${bairro}, ${xMun}-${uf}</td>
                <td>${cPais}</td>
                <td>${email}</td>
                <td>${cep}</td>
            </tr>
        `)
    })
}