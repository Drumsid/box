window.onload = function(){
    let inp_email = document.querySelector('input[name=email]');
    let inp_phone = document.querySelector('input[name=phone]');
    let inp_name = document.querySelector('input[name=name]');

    // alert(inp_email.value);

    document.querySelector('#send').onclick = function () {
        let params = 'email=' + inp_email.value + '&' + 'phone=' + inp_phone.value + '&' + 'name=' + inp_name.value;
        ajaxPost(params);
    }
}

function ajaxPost(params) {
    let request = new XMLHttpRequest();

    request.onreadystatechange = function () {
       if (request.readyState === 4 && request.status === 200) {
           if (request.responseText == '1') {
            document.querySelector('#result').innerHTML = "Well done!";
            document.querySelector('form').style.display = "none";
           } else {
                document.querySelector('#result').innerHTML = request.responseText;
           }
           
       } else if (request.readyState === 4 && request.status > 200) {
            document.querySelector('#result').innerHTML = 'Error 404!!! Get out off hear!';
       }
    }

    request.open('POST', 'app.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
}