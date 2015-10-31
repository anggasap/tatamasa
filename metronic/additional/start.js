/**
 * DECLARATION
 */
function tglTransStart(){
	var tgltrans = 	$('#id_sessTgltrans').text();
	$('#id_tgltrans').val(tgltrans.trim());
}
function readyToStart(){
	$(".nomor").val("0.00");
    $(".nomor").focus(function(){
	    if ($(this).val() == '0.00') {
	        $(this).val('');
	    }else{
	        this.select();
	    }
	});
	$(".nomor").focusout(function(){
	    if ($(this).val() == '') {
	        $(this).val('0.00');
	    }else{
	        var angka =$(this).val();
	        $(this).val(number_format(angka,2));
	    }
	});
    $(".nomor").keyup(function(){
        var val = $(this).val();
        if(isNaN(val)){
            val = val.replace(/[^0-9\.]/g,'');
            if(val.split('.').length>2)
                val =val.replace(/\.+$/,"");
            }
        $(this).val(val);
	    
	});
    
	$(".nomor1").val("0");
    $(".nomor1").focusout(function(){
        var val = $(this).val();
	    if ($(this).val() == '') {
	        $(this).val('0');
	    }else{
	        $(this).val(val);
	    }
	});
    $(".nomor1").keyup(function(){
        var val = $(this).val();
        if(isNaN(val)){
            val = val.replace(/[^0-9\.]/g,'');
            if(val.split('.').length>2)
                val =val.replace(/\.+$/,"");
            }
        $(this).val(val);
        
    });
}
function startCheckBox(){
	$(".checker span").removeClass("checked");
}
function resetForm(){
	$( "form input:text" ).val('');
	$( "form textarea" ).val('');
    $( "form select" ).val('');
}
/**
 * FUNCTION
 */
function btnStart(){
	$('#id_btnSimpan').attr("disabled",false);
	$('#id_btnUbah').attr("disabled",true);
    $('#id_btnHapus').attr("disabled",true);
}

function ajaxModal(){
	$(document).ajaxStart(function () {
        $('.modal_json').fadeIn('fast');
    }).ajaxStop(function () {
        $('.modal_json').fadeOut('fast');
    });
}
function CleanNumber(value) {
        newValue = value.replace(/\,/g, '');
        return newValue;
    }
var UIToastr = function () {
    return {
        //main function to initiate the module
        init: function (tipeAlert,pesan) {
             var i = -1,
                toastCount = 0

                var shortCutFunction = tipeAlert;//"success";
                var msg = pesan;//"Data berhasil disimpan.";
                var title = 'Notifikasi';
                var $showDuration = 500;
                var $hideDuration = 500;
                var $timeOut = 3000;
                var $extendedTimeOut = 1000;
                var $showEasing = "swing";
                var $hideEasing = "linear";
                var $showMethod = "fadeIn";
                var $hideMethod = "fadeOut";
                var toastIndex = toastCount++;

                toastr.options = {
                    closeButton: "checked",
                    debug: "checked",
                    positionClass: 'toast-top-right',
                    onclick: null
                };         
                 var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists

        }

    };

}();
function validatedate(inputText,vbl) {  
	var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;  
	// Match the date format through regular expression  
	if(inputText.match(dateformat)){  
	   // document.form1.text1.focus();  
		//Test which seperator is used '/' or '-'  
		var opera1 = inputText.split('/');  
		var opera2 = inputText.split('-');  
		lopera1 = opera1.length;  
		lopera2 = opera2.length;  
		// Extract the string into month, date and year  
		if (lopera1>1) {  
			//var pdate = inputText.split('/');  
			alert('Format tanggal salah!');  
			$( vbl ).focus();
			return false;
		}else if (lopera2>1){  
			var pdate = inputText.split('-');  
			var dd = parseInt(pdate[0]);  
			var mm  = parseInt(pdate[1]);  
			var yy = parseInt(pdate[2]);  
			// Create list of days of a month [assume there is no leap year by default]  
			var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
			if (mm==1 || mm>2){  
			  if (dd>ListofDays[mm-1]){  
				  alert('Format tanggal salah!');  
				  $( vbl ).focus();
				  return false;  
			  }  
			}  
			if (mm==2){  
				var lyear = false;  
				if ( (!(yy % 4) && yy % 100) || !(yy % 400)){  
					lyear = true;  
				}  
				if ((lyear==false) && (dd>=29)){  
					alert('Format tanggal salah!'); 
					$( vbl ).focus();
					return false;  
				}  
				if ((lyear==true) && (dd>29)){  
					alert('Format tanggal salah!');  
					$( vbl ).focus();
					return false;  
				}  
		   }//if (mm==2){  
		}  
		
	}else{  
		alert("Format tanggal salah!");  
		$( vbl ).focus();
		return false;  
	}  
}  //function validatedate(inputText)
function number_format (number, decimals, dec_point, thousands_sep) {
	  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	  var n = !isFinite(+number) ? 0 : +number,
	    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
	    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
	    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
	    s = '',
	    toFixedFix = function (n, prec) {
	      var k = Math.pow(10, prec);
	      return '' + Math.round(n * k) / k;
	    };
	  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	  if (s[0].length > 3) {
	    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	  }
	  if ((s[1] || '').length < prec) {
	    s[1] = s[1] || '';
	    s[1] += new Array(prec - s[1].length + 1).join('0');
	  }
	  return s.join(dec);
	}

var th = ['','ribu','juta', 'milyar','trilyun'];
var dg = ['nol','satu','dua','tiga','empat', 'lima','enam','tujuh','delapan','sembilan']; var tn = ['sepuluh','sebelas','dua belas','tiga belas', 'empat belas','lima belas','enam belas', 'tujuh belas','delapan belas','sembilan belas']; var tw = ['dua puluh','tiga puluh','empat puluh','lima puluh', 'enam puluh','tujuh puluh','delapan puluh','sembilan puluh']; function toWords(s){s = s.toString(); s = s.replace(/[\, ]/g,''); if (s != parseFloat(s)) return 'bukan angka'; var x = s.indexOf('.'); if (x == -1) x = s.length; if (x > 15) return 'terlalu besar'; var n = s.split(''); var str = ''; var sk = 0; for (var i=0; i < x; i++) {if ((x-i)%3==2) {if (n[i] == '1') {str += tn[Number(n[i+1])] + ' '; i++; sk=1;} else if (n[i]!=0) {str += tw[n[i]-2] + ' ';sk=1;}} else if (n[i]!=0) {str += dg[n[i]] +' '; if ((x-i)%3==0) str += 'ratus ';sk=1;} if ((x-i)%3==1) {if (sk) str += th[(x-i-1)/3] + ' ';sk=0;}} if (x != s.length) {var y = s.length; str += 'koma '; for (var i=x+1; i<y; i++) str += dg[n[i]] +' ';} return str.replace(/\s+/g,' ');}