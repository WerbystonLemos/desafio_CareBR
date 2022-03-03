function sendFile()
{
    let form = document.querySelector('#formFile')
    form = new FormData(form)

    let arquivo = $("#inptFileXml").val()
    $.ajax({
        url: "./app/controllers/indexController.php",
        type: "post",
        data: form,
        dataType: 'json',
        processData: false,  
        contentType: false,
        success: (res) => console.log("res: "+res),
        error: (err) => console.log(JSON.stringify(err))
    })
}