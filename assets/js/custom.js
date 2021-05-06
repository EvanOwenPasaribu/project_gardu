/*###############################
            Input User
###############################*/


$('#submit-user').click(function() {
    var nama = $('#nama');
    var email = $('#email');
    var nomor = $('#nomor');
    var lk = $('#lk');
    var pr = $('#pr');
    var jenisKelamin = "";
    if(lk.is(':checked')) jenisKelamin = lk.val();
    else jenisKelamin=pr.val();
    var alamat = $('#alamat');
    var password = $('#password');

    if(!checkInput(nama, email, nomor)){
        $.post("input_user_model.php", {
            add_user:"",
            nama:nama.val().trim(),
            email:email.val().trim(),
            nomor_hp:nomor.val().trim(),
            jenis_kelamin:jenisKelamin,
            alamat:alamat.val(),
            password:password.val().trim()
        },function(data, status){
            swal("", "Data Sudah Ditambahkan", "success");
            $('#nama').val("");
            $('#email').val("");
            $('#nomor').val("");
            lk.prop('checked',true)
            $('#alamat').val("");
            $('#password').val("");
        });
    }
})

$('.input-gardu-section #nama').keyup(function(){
    var valNama = $(this).val().trim();
    if(valNama == ""){
        setErrorFor($(this), 'Nama Tidak Boleh Kosong');
    }else{
        setSuccessFor($(this));
    }
})

$('.input-gardu-section #email').keyup(function(){
    var valEmail = $(this).val().trim();
    if(valEmail === '') {
		setErrorFor($(this), 'Email Tidak Boleh Kosong');
	} else if (!isEmail(valEmail)) {
		setErrorFor($(this), 'Email Tidak Valid');
	} else {
		setSuccessFor($(this));
	}
})

$('.input-gardu-section #nomor').keyup(function(){
    var valNomor = $(this).val().trim();
    if(valNomor === '') {
		setErrorFor($(this), 'Nomor HP Tidak Boleh Kosong');
	}else if(valNomor.length <= 9){
        setErrorFor($(this), 'Nomor tidak valid');
    }
    else {
		setSuccessFor($(this));
	}
})

function checkInput(nama, email, nomor){
    var valNama = nama.val().trim();
    var valEmail = email.val().trim();
    var valNomor = nomor.val().trim();
    var error = false;

    if(valNama == ""){
        setErrorFor(nama, 'Nama Tidak Boleh Kosong');
        error = true;
    }else{
        setSuccessFor(nama);
    }

    if(valEmail === '') {
		setErrorFor(email, 'Email Tidak Boleh Kosong');
        error = true;
	} else if (!isEmail(valEmail)) {
		setErrorFor(email, 'Email Tidak Valid');
        error = true;
	} else {
		setSuccessFor(email);
	}

    if(valNomor === '') {
		setErrorFor(nomor, 'Nomor HP Tidak Boleh Kosong');
        error = true;
	}else if(valNomor.length <= 9){
        setErrorFor(nomor, 'Nomor tidak valid');
        error = true;
    }
    else {
		setSuccessFor(nomor);
	}

    if(!error){
        removeClassInput(nama);
        removeClassInput(email);
        removeClassInput(nomor);
    }

    return error;
}


function setErrorFor(input, message) {
	const formControl = input.parent();
    formControl.addClass('error');
    formControl.removeClass('success');
	const invalid_input = formControl.find(".invalid-input");
    invalid_input.text(message);
}

function setSuccessFor(input) {
	const formControl = input.parent();
    formControl.removeClass('error');
	formControl.addClass('success');
}

function removeClassInput(input){
    const formControl = input.parent();
    formControl.removeClass('success');
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
