/**
 * Created by itssu on 04-Sep-16.
 */

$('document').ready(function(){



    $('#college').DataTable({

        ajax: 'scripts/ajax/retrieveallcol.php',
        columns: [
            {"data": 'colg_id'},
            {"data": 'colg_name'},
            {"data": function(data){
                var x = encodeMe(data.colg_id);
                var y = "'"+x+"'";

                return '<a href="javascript:viewDept('+y+')"><button class="btn btn-default" value="VIEW DEPARTMENTS">VIEW DEPARTMENTS</button></a>&nbsp;&nbsp;<a href="javascript:editCollege('+y+')"><button class="btn btn-default" value="EDIT" data-toggle="modal" data-target="#addColg">EDIT</button></a>&nbsp;&nbsp;<button class="btn btn-default" value="EDIT" data-toggle="modal" data-target="#addColg">DELETE</button>';
            }}
        ]
    });
  
});


var Base64 = {


    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


    encode: function(input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },


    decode: function(input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    _utf8_encode: function(string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    _utf8_decode: function(utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while (i < utftext.length) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

};



function editCollege(data){

    console.log(data);
    var x = decodeMe(data);

    console.log('College Editor:'+x);
    //document.getElementById('openModalAP').click();

}

function encodeMe(val){
    return Base64.encode(val);
}

function decodeMe(val){
    return Base64.decode(val);
}

function viewDept(data){
    console.log(data);
    var x = decodeMe(data);

    $('.colg_id').val(x);
    $('.colg_id').prop('disabled', true);
    console.log('Department:'+x);

    $('#department').DataTable().destroy();

    $('#department').DataTable({

        'ajax' : {
            'url':'scripts/ajax/retrievealldept.php',
            'type': 'POST',
            'data': {
                'colg_id' : x
            }
        },
        'columns': [
            {'data': 'dep_id'},
            {'data': 'dep_name'},
            {"data": function(data){
                var x = encodeMe(data.dep_id);
                var y = "'"+x+"'";

                return '<a href="javascript:viewSub('+y+')"><button class="btn btn-default" value="VIEW SUBJECTS">VIEW SUBJECTS</button></a>&nbsp;&nbsp;<a href="javascript:viewProf('+y+')"><button class="btn btn-default" value="VIEW PROFESSORS">VIEW PROFESSORS</button></a>&nbsp;&nbsp;<a href="javascript:editCollege('+y+')"><button class="btn btn-default" value="EDIT" >EDIT</button></a>&nbsp;&nbsp;<button class="btn btn-default" value="DELETE">DELETE</button>';
            }}
        ]

    });

    $('.departments-div').css('display', 'block');
}


function viewSub(data){



    var x = decodeMe(data);

    $('.dept_id').val(x);
    $('.dept_id').prop('disabled', true);

    $('#subject').DataTable().destroy();

    $('#subject').DataTable({

        ajax : {
            url:'scripts/ajax/retrieveallsub.php',
            type: 'POST',
            data: {
                'dep_id' : x
            }
        },
        columns: [
            {data: 'sub_id'},
            {data: 'sub_name'},
            {data: 'dep_id'},
            {data: 'sem'},
            {"data": function(data){
                var x = encodeMe(data.dep_id);
                var y = "'"+x+"'";

                return '<button class="btn btn-default" value="EDIT" >EDIT</button></a>&nbsp;&nbsp;<button class="btn btn-default" value="DELETE">DELETE</button>';
            }}
        ]

    });

    $('.subjects-div').css('display', 'block');
}

function viewProf(data){

    var x = decodeMe(data);


    $('#professor').DataTable().destroy();

    $('#professor').DataTable({

        ajax : {
            url:'scripts/ajax/retrieveallpro.php',
            type: 'POST',
            data: {
                'dep_id' : x
            }
        },
        columns: [
            {data: 'prof_id'},
            {data: 'prof_name'},
            {"data": function(data){
                var x = encodeMe(data.dep_id);
                var y = "'"+x+"'";

                return '<button class="btn btn-default" value="EDIT" >EDIT</button></a>&nbsp;&nbsp;<button class="btn btn-default" value="DELETE">DELETE</button>';
            }}
        ]

    });
 

    $('.professors-div').css('display', 'block');
}