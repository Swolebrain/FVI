

/******************************************************************************************************
 * HOW THIS WORKS: This is one form validation method for the entire site. After the php is interpreted
 * and the html is served to the client, if the client is on the "contact us" page, there will be two
 * different html forms in that same page. One of them is in the header, and its DOM name is sentMessage.
 * The other one is in the contact-us page itself. Thus, a reference to the form node of the DOM must be
 * passed to this function in order for validation to happen correctly.
 *
 * Because there will be two forms in the html whenever the user browses to the contact page, the form within
 * the contact page template should have a different name and id than the one in the modal (header).
 *
 * All forms are always submitted to velocify and ynot as well. ynot submission happens via ajax and
 * velocify submission happens using the form.submit() function once the ynot ajax call completes.
 *
 * it is EXTREMELY IMPORTANT that all forms submitted using this CheckForm1 validation function have no
 * button or input with name=submit. If they do then an infinite loop may be generated and leads will be
 * submitted like 500 times.
 *******************************************************************************************************
 ********************************************************************************************************/

function CheckForm1(theform, contactPage) {
    var error = false;
    var currentURL = window.location.pathname;
    try{
        if (theform.first_name.value == ""){
            alert("Please enter your first name");
            theform.first_name.focus();
            error = true;
            return false;
    
        }
        if (theform.last_name.value == ""){
            alert("Please enter last name");
            theform.last_name.focus();
            error = true;
            return false;
        }
        if (theform.email.value == ""){
            alert("Please enter your email address");
            theform.email.focus();
            error = true;
            return false;
        }
       if (theform.email.value.length > 0){
            var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
            if (!pattern.test(theform.email.value)) {
                alert("Please enter valid email address");
                theform.email.focus();
                error = true;
                return false;
            }
       }
       $(".inp").keyup(function () {
        if (this.value.length == this.maxLength) {
          $(this).next('.inputs').focus();
        }
    });
    theform.day_phone.value=theform.phone1.value+theform.phone2.value+theform.phone3.value;
    
    //alert(day_phone1);
        if (theform.day_phone.value == ""){
            alert("Please enter your Phone Number");
            //theform.day_phone.focus();
            error = true;
            return false;
        }
        var phoneno = /^\d{10}$/;
        if (!theform.day_phone.value.match(phoneno)){
            alert("Not a valid Phone Number");
            error = true;
            return false;
        }
        if (theform.zipcode.value == ""){
            alert("Please enter your zip code");
            theform.zipcode.focus();
            error = true;
            return false;
        }
        if (theform..location_id.value == ""){
            alert("Please select a program");
            error = true;
            return false;
        }
	
    }
    catch (err){
      console.log(err);
      return false;
    }
    /**********Victor's Code to send form to yNot ***************/
    if (!error){
        var queryString = "program_id="+theform.program_id.value;
        queryString += "&first_name="+theform.first_name.value;
        queryString += "&last_name="+theform.last_name.value;
        queryString += "&day_phone="+theform.day_phone.value;
        queryString += "&email="+theform.email.value;
        queryString += "&zipcode="+theform.zipcode.value;
        queryString += "&location_id="+theform.location_id.value;
        queryString += "&lead_source_id="+theform.lead_source_id.value;
        console.log("Sending to ynot: "+queryString);
        /*
         * The following ajax call submits the form to ynot asynchronously. Upon success or failure,
         *  the form is then submitted to velocify using 2001 (default) form posting method by
         *  calling the submit() function of the form object.
         */
        $.ajax({
			type: "POST",
			url: "http://api.ynotlms.com/leads.json",
			data: queryString,
			success: function (data, textStatus, jqXHR) {
				console.log("****************Ynot submission successful");
				console.log(data);
				theform.submit();
			},
			error: function(jqXHR, status, err ){
				console.log("********YNOT ERROR: "+status);
				console.log(err);
				theform.submit();
			}
        });
    }
}

function setloc(theform){
    var e = theform.program_id;

    var strUser = e.options[e.selectedIndex].value;

    if(strUser == 5167 || strUser ==4826 || strUser ==4897 || strUser ==5168){
      theform.location_id.value=1169;
    }
	else{
      theform.location_id.value=875;

	}

}