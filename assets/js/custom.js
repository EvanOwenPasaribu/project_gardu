document.getElementById('tanggal').valueAsDate = new Date();
var x = new Date()
// document.getElementById('waktu').value = "1:1";

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


/*###############################
        Input Pengukuran
###############################*/
$('#submit-pengukuran').click(function() {
    var kode = $('#kode');
    var tanggal = $("#tanggal")
    var waktu = $('#waktu');
    var tim = $('#tim');
    var daya = $('#daya');
    var alamat = $('#alamat');
    var indukN = $('#indukN');
    var jurusanA = $('#jurusanA');
    var jurusanAR = $('#jurusanAR');
    var jurusanAS = $('#jurusanAS');
    var jurusanAT = $('#jurusanAT');
    var jurusanAN = $('#jurusanAN');
    var jurusanB = $('#jurusanB');
    var jurusanBR = $('#jurusanBR');
    var jurusanBS = $('#jurusanBS');
    var jurusanBT = $('#jurusanBT');
    var jurusanBN = $('#jurusanBN');
    var jurusanC = $('#jurusanC');
    var jurusanCR = $('#jurusanCR');
    var jurusanCS = $('#jurusanCS');
    var jurusanCT = $('#jurusanCT');
    var jurusanCN = $('#jurusanCN');
    var teganganRS = $('#teganganRS');
    var teganganRT = $('#teganganRT');
    var teganganST = $('#teganganST');
    var teganganRN = $('#teganganRN');
    var teganganSN = $('#teganganSN');
    var teganganTN = $('#teganganTN');


    if(!checkInput(kode, daya)){
        $.post("input_pengukuran_model.php", {
            add_pengukuran:"",
            kode:kode.val().trim(),
            tanggal:tanggal.val(),
            waktu:waktu.val(),
            tim:tim.val().trim(),
            daya:daya.val().trim(),
            alamat:alamat.val().trim(),
            indukN:indukN.val().trim(),
            jurusanA:jurusanA.val().trim(),
            jurusanAR:jurusanAR.val().trim(),
            jurusanAS:jurusanAS.val().trim(),
            jurusanAT:jurusanAT.val().trim(),
            jurusanAN:jurusanAN.val().trim(),
            jurusanB:jurusanB.val().trim(),
            jurusanBR:jurusanBR.val().trim(),
            jurusanBS:jurusanBS.val().trim(),
            jurusanBT:jurusanBT.val().trim(),
            jurusanBN:jurusanBN.val().trim(),
            jurusanC:jurusanC.val().trim(),
            jurusanCR:jurusanCR.val().trim(),
            jurusanCS:jurusanCS.val().trim(),
            jurusanCT:jurusanCT.val().trim(),
            jurusanCN:jurusanCN.val().trim(),
            teganganRS:teganganRS.val().trim(),
            teganganRT:teganganRT.val().trim(),
            teganganST:teganganST.val().trim(),
            teganganRN:teganganRN.val().trim(),
            teganganSN:teganganSN.val().trim(),
            teganganTN:teganganTN.val().trim(),
        },function(data, status){
            swal("", "Data Pengukuran Sudah Ditambahkan", "success");
            $('kode').val("");
            $('#tanggal').val("");
            $('#waktu').val("");
            $('#tim').val("");
            $('#daya').val("");
            $('#alamat').val("");
            $('#indukN').val("");
            $('#jurusanA').val("");
            $('#jurusanAR').val("");
            $('#jurusanAS').val("");
            $('#jurusanAT').val("");
            $('#jurusanAN').val("");
            $('#jurusanB').val("");
            $('#jurusanBR').val("");
            $('#jurusanBS').val("");
            $('#jurusanBT').val("");
            $('#jurusanBN').val("");
            $('#jurusanC').val("");
            $('#jurusanCR').val("");
            $('#jurusanCS').val("");
            $('#jurusanCT').val("");
            $('#jurusanCN').val("");
            $('#teganganRS').val("");
            $('#teganganRT').val("");
            $('#teganganST').val("");
            $('#teganganRN').val("");
            $('#teganganSN').val("");
            $('#teganganTN').val("");
        });
    }
})

// $('.input-gardu-section #kode').keyup(function(){
//     var valNama = $(this).val().trim();
//     if(valNama == ""){
//         setErrorFor($(this), 'Nama Tidak Boleh Kosong');
//     }else{
//         setSuccessFor($(this));
//     }
// })

function checkInput(kode, daya){
    var valKode = kode.val().trim();
    var valDaya = daya.val().trim();
    var error = false;

    if(valKode == ""){
        setErrorFor(kode, 'Kode Tidak Boleh Kosong');
        error = true;
    }else{
        setSuccessFor(kode);
    }

    if(valDaya == ""){
        setErrorFor(daya, 'Daya Tidak Boleh Kosong');
        error = true;
    }else{
        setSuccessFor(daya);
    }

    if(!error){
        removeClassInput(kode);
        removeClassInput(daya);
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