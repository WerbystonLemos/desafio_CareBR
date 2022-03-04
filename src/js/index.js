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