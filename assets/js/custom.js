function init(){
    $(".main-content section").hide();
    $(".dashboard-section").show();
}


$("#map-input").show()


/*###############################
            Input User
###############################*/


$('#submit-user').click(function() {
    var nama = $('#nama').val();
    var email = $('#email').val();
    var nomor = $('#nomor').val();
    var lk = $('#lk');
    var pr = $('#pr');
    var jenisKelamin = "";
    if(lk.is(':checked')) jenisKelamin = lk.val();
    else jenisKelamin=pr.val();
    var alamat = $('#alamat').val();
    var password = $('#password').val();


    $.post("input_user_model.php", {
        add_user:"",
        nama:nama,
        email:email,
        nomor_hp:nomor,
        jenis_kelamin:jenisKelamin,
        alamat:alamat,
        password:password
    },function(data, status){
        swal("", "Data Sudah Ditambahkan", "success");
        $('#nama').val("");
        $('#email').val("");
        $('#nomor').val("");
        lk.prop('checked',true)
        $('#alamat').val("");
        $('#password').val("");
    });


})

function saveUser() {
    //console.log("sedang memerikasa");

    // var url = './input_user_model.php';

    // $.post('input_user_model.php', {add_user:""},function(data, status){
    //     alert(status);
    // })

    // $.post("input_user_model.php", {
    //     add_user:"",
    //     nama:"EvanOwen",
    //     Email:"evan@gmail.com",
    //     nomor_hp:"0823423423223",
    //     jenis_kelamin:"1",
    //     alamat:"Kalianda"
    // },function(data, status){
    //     alert(status);
    // });

    //sendData(url);

    // downloadUrl(url, function(data, responseCode) {
    //     if (responseCode === 200  && data.length > 1) {
    //         swal("Oke!", "Berhasil Disimpan", "success");
    //     }else{
    //         console.log(responseCode);
    //         console.log(data);
    //         alert("Error Cuk")
    //     }
    // });
}

// function downloadUrl(url, callback) {
//     var nama = document.getElementById('nama').value;
//     var email = document.getElementById('email').value;
//     var nomor = document.getElementById('nomor').value;
//     var lk = document.getElementById('lk')
//     var pr = document.getElementById('lk')
//     var jenisKelamin = "";
//     if(lk.checked) jenisKelamin = lk.value;
//     else jenisKelamin=pr.value;
//     var alamat = document.getElementById('alamat').value;
//     var password = document.getElementById('password').value;
//     var dataSend = 'add_user&nama=' + nama + '&email=' + email + '&nomor_hp=' + nomor + '&jenis_kelamin=' + jenisKelamin + '&alamat=' + alamat + '&password=' + password;



    // var request = new XMLHttpRequest();
    // request.onreadystatechange = function() {
    //     if (request.readyState == 4) {
    //         callback(request.responseText, request.status);
    //     }
    // };

    // request.open('POST', url, true);
    // request.send(dataSend);
// }

// const sendHttpRequest = (method, url, data) => {
//     const promise = new Promise((resolve, reject) => {
//         const xhr = new XMLHttpRequest();
//         xhr.open(method, url);

//         // if (data) {
//         //     xhr.setRequestHeader('Content-Type', 'application/json');
//         // }

//         xhr.onload = () => {
//         if (xhr.status >= 400) {
//             reject(xhr.response);
//         } else {
//             resolve(xhr.response);
//         }
//         };

//         xhr.onerror = () => {
//         reject('Something went wrong!');
//         };

//         xhr.send(JSON.stringify(data));
//     });
//     return promise;
// };

// const sendData = (url) => {
// sendHttpRequest('POST', url, {
//         add_user:"",
//         nama:"EvanOwen",
//         Email:"evan@gmail.com",
//         nomor_hp:"0823423423223",
//         jenis_kelamin:"1",
//         alamat:"Kalianda",
//         password:"1234112"
//     })
//         .then(responseData => {
//             console.log("Berhasil");
//         })
//         .catch(err => {
//         console.log(err);
//         });
// };