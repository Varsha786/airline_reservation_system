function showflight(destinationcity) {
    var sourcecity = document.getElementById("sourcecity").value;
    if (sourcecity == '') {
        alert("Enter Source City")
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                document.getElementById("output").innerHTML = output;
            }

        };
        xmlhttp.open("GET", "getflight.php?q=" + sourcecity + "&des=" + destinationcity, true);
        xmlhttp.send();
    }

}

function searchflights() {
    var sourcecity = document.getElementById("sourcecity").value;
    var destinationcity = document.getElementById("destinationcity").value;
    var departuredate = document.getElementById("departuredate").value;
    if (sourcecity == '' || destinationcity == '' || departuredate == '') {
        alert("Enter Details of Journey");
    } else {
        window.location.href = "getflightavail.php?sourcecity=" + sourcecity + "&destinationcity=" + destinationcity + "&departuredate=" + departuredate;
    }

}

var seats = [];
var total = 0;
var email = '';
var flightid = '';
var flightdate = '';

function chooseseat(seatno) {
    var seatindex = '';
    var flag = false;
    var type = document.getElementById(seatno).title;
    var price = 0;
    if (type == 'Economy') {
        price = parseInt(document.getElementById("eprice").value);
    } else {
        price = parseInt(document.getElementById("bprice").value);
    }
    for (i = 0; i < seats.length; i++) {
        if (seats[i][0] == seatno) {
            flag = true;
            seatindex = i;
            break;
        }
    }
    if (flag == true) {
        seats.splice(seatindex, 1);
        if (type == 'Economy') {
            document.getElementById(seatno).className = "btn btn-info";
        } else {
            document.getElementById(seatno).className = "btn btn-info";
        }
    } else {
        document.getElementById(seatno).className = "btn btn-secondary";
        seats.push([seatno, type, price]);
    }
    var tabs = '';
    var k = 0;
    total = 0;
    for (i = 0; i < seats.length; i++) {
        total += seats[i][2];
        k++;
        tabs += '<tr>' + '<td>' + k + '</td>' + '<td>' + seats[i][0] + ',' + seats[i][1] + '</td>' + '<td>' + seats[i][2] + '/-</td>' + '</tr>';
    }
    tabs += '<tr>' + '<th colspan="2">Total</th>' +
        '<td colspan="2">' + total + '/-</td>' + '</tr>';
    document.getElementById("myseats").innerHTML = tabs;
}

function passengerDetail() {

    email = document.getElementById("email").value;
    flightid = document.getElementById("flightid").value;
    flightdate = document.getElementById("flightdate").value;
    if (email == '') {
        window.location.href = "userlogin.php?flightid=" + flightid + "&flightdate=" + flightdate;
    } else {
        if (seats.length == 0) {
            alert('Select Seat');
        } else {
            $("#passengers").modal('show');
            var tabs = '<form id="passengerForm">' +
                '<input type="hidden" name="flightid" id="flightid" value="' + flightid + '">' +
                '<input type="hidden" name="flightdate" id="flightdate" value="' + flightdate + '">' +
                '<input type="hidden" name="noOfPassengers" id="noOfPassengers" value="' + seats.length + '">' +
                '<input type="hidden" name="grandtotal" id="grandtotal" value="' + total + '">' +
                '<table class="table">' +
                '<tr>' +
                '<th>Sr.no</th>' +
                '<th>Passenger Name</th>' +
                '<th>Father\'s Name</th>' +
                '<th>Age</th>' +
                '<th>Gender</th>' +
                '<th>Adhar photo</th>' +
                '<th>Seat no.</th>' +
                '<th>Price</th>' +
                '<tr>';
            var k = 0;
            for (i = 0; i < seats.length; i++) {
                k++;
                tabs += '<tr>' +
                    '<td>' + k + '</td>' +
                    '<td><input type="text" name="pname-' + i + '" placeholder="Enter the Passenger\'s Name" data-rule-required="true" class="form-control"></td>' +
                    '<td><input type="text" name="fname-' + i + '" placeholder="Enter the Father\'s Name" class="form-control"></td>' +
                    '<td><input type="text" name="age-' + i + '" placeholder="Enter your Age" data-rule-required="true" class="form-control"></td>' +
                    '<td><select name="gender-' + i + '" data-rule-required="true"  class="form-control">' +
                    '<option value="">Gender</option>' +
                    '<option>Male</option>' +
                    '<option>Female</option>' +
                    '</select></td>' +
                    '<td><input type="file" name="proof-' + i + '"  data-rule-required="true" data-rule-extension="png|jpg|gif|JPG|GIF|PNG" class="form-control"></td>' +
                    '<td><input type="text" readonly name="seatno-' + i + '" id="seatno" value="' + seats[i][0] + ','
                    + seats[i][1] + '" class="form-control"></td>' +
                    '<td><input type="text" readonly name="price-' + i + '" id="price" value="' + seats[i][2] + '" class="form-control"></td>' +
                    '</tr>';
            }
            tabs += '<tr>' +
                '<td colspan="8" class="text-right">' +
                '<input type="button" class="btn btn-primary" value="Pay" onclick="pay()">' +
                '</td>' +
                '</tr>' +
                '</table></form>';
            document.getElementById("passengerOutput").innerHTML = tabs;
        }
    }
}


function pay() {
    if ($("#passengerForm").valid()) {
        var controls = document.getElementById("passengerForm").elements;
        var formdata = new FormData();
        for (i = 0; i < controls.length; i++) {
            if (controls[i].type == 'file') {
                formdata.append(controls[i].name, controls[i].files[0]);
            } else {
                formdata.append(controls[i].name, controls[i].value);
            }
        }
        var options = {
            "key": "rzp_test_dRWiKHS7zr2Gki",
            "amount": total * 100,
            "name": "FlyWell airlines",
            "description": "A Safe journey",
            "image": "home/indigo.jpg",
            "handler": function (response) {
                //alert(response.razorpay_payment_id);
                if (response.razorpay_payment_id == "") {
                    //alert('Failed');
                    window.location.href = "booking.php?q=" + flightid + "&date=" + flightdate + "&status=failed";
                }
                else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            console.log(this.responseText);
                            var output = this.responseText;
                            //document.getElementById("poutput").innerHTML="hidden";
                            window.location.href = output;
                        }
                        else {
                            document.getElementById("poutput").innerHTML="Processing....";
                        }
                    };
                    xmlhttp.open("POST", "insert_payment.php", true);
                    xmlhttp.send(formdata);
                    //window.location.href = "insert_payment.php?status=success&id=" + invoiceid + "&fees=" + invoice_type;
                }
            },
            "prefill": {
                "name": "",
                "email": email
            },
            "notes": {
                "address": ""
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();

    }

}