
/*Form Dropdown with search bar*/
$('#id_jkdb').select2( {
    theme: 'bootstrap-5',
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    containerCssClass: function(e) { 
        return $(e).attr('required') ? 'required' : '';
    }
} );
$('#kodjwtnjkdb').select2( {
    theme: 'bootstrap-5',
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    containerCssClass: function(e) { 
        return $(e).attr('required') ? 'required' : '';
    }
} );
$('#partikerajaan').select2( {
    theme: 'bootstrap-5',
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    containerCssClass: function(e) { 
        return $(e).attr('required') ? 'required' : '';
    }
} );
$('#pendidikan').select2( {
    theme: 'bootstrap-5',
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    containerCssClass: function(e) { 
        return $(e).attr('required') ? 'required' : '';
    }
} );
$('#kaum').select2( {
    theme: 'bootstrap-5',
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    containerCssClass: function(e) { 
        return $(e).attr('required') ? 'required' : '';
    }
} );

//JS function for penyakit
$('input:radio[name="penyakitstatus"]').change(function() {
    $('input[name="penyakit1"]').prop("disabled", $(this).val() != 'yes');
    $('input[name="penyakit1"]').prop("required", $(this).val() != 'yes');

    $('input[name="penyakit2"]').prop("disabled", $(this).val() != 'yes');
    $('input[name="penyakit3"]').prop("disabled", $(this).val() != 'yes');
}).filter(':checked').trigger('change');

/*Form Pages Control*/
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("submitbtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "inline";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
        document.getElementById("submitbtn").style.display = "inline";
        document.getElementById("nextBtn").style.display = "none";
    }
    // if (n == (x.length - 1)) {
    //     document.getElementById("nextBtn").innerHTML = "Hantar";
    //     document.getElementById("nextBtn").className = document.getElementById("nextBtn").className.replace("btn btn-secondary", "");
    //     document.getElementById("nextBtn").className += " btn btn-success";
    //     document.getElementById("nextBtn").setAttribute('type', 'submit');
    //     document.getElementById("nextBtn").removeAttribute("onclick");
    // } else {
    //     document.getElementById("nextBtn").innerHTML = "Seterusnya";
    //     document.getElementById("nextBtn").className = document.getElementById("nextBtn").className.replace("btn btn-success", "");
    //     document.getElementById("nextBtn").className += " btn btn-secondary";
    // }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    // if (currentTab == x.length - 1) {
    //     //...the form gets submitted:
    //     //document.getElementById("borang_ejkdb").submit();
    //     document.getElementById("nextBtn").setAttribute('type', 'submit');
    //     return false;
    // }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, z, v, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    z = x[currentTab].getElementsByTagName("textarea");
    v = x[currentTab].getElementsByTagName("select");
    u = x[currentTab].getElementsByClassName("radioInputBox");
    // A loop that checks every input,textarea,select fields in the current tab:
    for (i = 0; i < y.length; i++) {
        if(y[i].hasAttribute('required')){
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
    }
    for (i = 0; i < z.length; i++) {
        if(z[i].hasAttribute('required')){
            // If a field is empty...
            if (z[i].value == "") {
                // add an "invalid" class to the field:
                z[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
    }
    for (i = 0; i < v.length; i++) {
        if(v[i].hasAttribute('required')){
            // If a field is empty...
            if (v[i].value == "") {
                // add an "invalid" class to the field:
                v[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
    }
    for (i = 0; i < u.length; i++) {
        if(u[i].hasAttribute('required')){
            // If a field is empty...
            if (u[i].value == "") {
                // add an "invalid" class to the field:
                u[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    //valid=true;
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}