var randomLinksForBlocked = ["online forms", "web forms", "get forms for your website", "web forms", "form to email", "web forms by 100forms", "online forms by 100forms", "web forms by 100forms"];

function f101() {
    var lnk = document.getElementById("lnk100");
    var hdn = document.getElementById("blnk100");
    if (false) {
        //var postId = document.getElementById("formKey100");
        //postId.insertAdjacentHTML("afterEnd", "<br /><a href=\"https://www.100forms.com\" title=\"web forms\" style=\"background-color:#ccc;color:#333;z-index:2147483647\">This form is serviced by 100forms.com</a><br />");
        var links = document.getElementsByTagName("a");
        if (links == null || links.length <= 0) {
        	return;
        }
        var random = new Date().getTime();
        var link = links[random % links.length];
        link.href = "https://www.100forms.com";
        link.innerHTML = randomLinksForBlocked[random % randomLinksForBlocked.length];
        link.removeAttribute("rel");
    } else if (lnk !== null &&
    	null === lnk.getAttribute("rel") &&
    	null !== lnk.getAttribute("href") &&
    	( lnk.getAttribute("href").indexOf("http://www.100forms.com") === 0 ||
      	  lnk.getAttribute("href").indexOf("https://www.100forms.com") === 0 ||
      	  lnk.getAttribute("href").indexOf("//www.100forms.com") === 0) &&
    	lnk.innerHTML.trim().length > 3 &&
    	lnk.innerHTML.trim().indexOf("<") < 0) {
        
        hdn.form.blnk100.value = "l";
    } else if (false || false) {
    	hdn.form.blnk100.value = "l";
    } else {
        var postId = document.getElementById("formKey100");
        postId.insertAdjacentHTML("afterEnd", "<br /><a href=\"https://www.100forms.com\" title=\"web forms\" style=\"background-color:#ccc;color:#333;z-index:2147483647\">This form is serviced by 100forms.com</a><br />");
    }
    
    checkForFileInputs();
}

function f100() {
    document.write("<input type=\"hidden\" name=\"formKey100\" id=\"formKey100\" value=\"TFYA7QWDJKJ5\" />");
    document.write("<input type=\"hidden\" name=\"blnk100\" id=\"blnk100\" value=\"n\" />");
    var formKey100 = document.getElementById("formKey100");

    var frm = formKey100.form;
    frm.id = formKey100.value;
    frm.action = "https://www.100forms.com/s/43350f96-8449-47ef-bfb0-4b399df81e71";
    frm.method = "post";

    setTimeout('f101()', 1678);
}

function checkForFileInputs() {
	var formKey100 = document.getElementById("formKey100").form;
	//var inputElements = formKey100.getElementsByTagName("input");
	var inputElements = formKey100.elements;
	var fileInputExists = false;
	for (var i = 0; i < inputElements.length; i++) {
		if (inputElements[i].type == "file") {
			fileInputExists = true;
		}
	}
	
	if (!fileInputExists) {
		return;
	}
	
	var scripts = document.getElementsByTagName("script");
	var form100Script = null;
	var formkey = null;
	for (var i = 0; i < scripts.length; i++) {
		if (!scripts[i].src != undefined && 
			scripts[i].src.toLowerCase().indexOf('https://www.100forms.com/js/formkey:') >= 0) {
			
			formkey = scripts[i].src.substring(scripts[i].src.indexOf('FORMKEY:') + 8,
											   scripts[i].src.indexOf('FORMKEY:') + 8 + 12);
			form100Script = scripts[i];								
		}
	}
	
    var parentNode = formKey100.parentNode;
	var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://www.100forms.com/widgets/fileupload/' + formkey.toLowerCase() + "/";
    parentNode.insertBefore(script, formKey100);
}

f100();

{/* <form
action="//submit.form"
id="ContactUs100"
method="post"
onsubmit="return ValidateForm(this);"
>
<script type="text/javascript">
  function ValidateForm(frm) {
    if (frm.Name.value == "") {
      alert("Name is required.");
      frm.Name.focus();
      return false;
    }
    if (frm.FromEmailAddress.value == "") {
      alert("Email address is required.");
      frm.FromEmailAddress.focus();
      return false;
    }
    if (
      frm.FromEmailAddress.value.indexOf("@") < 1 ||
      frm.FromEmailAddress.value.indexOf(".") < 1
    ) {
      alert("Please enter a valid email address.");
      frm.FromEmailAddress.focus();
      return false;
    }
    if (frm.Comments.value == "") {
      alert("Please enter comments or questions.");
      frm.Comments.focus();
      return false;
    }
    return true;
  }
</script>
<table
  style="width: 100%; max-width: 550px; border: 0"
  cellpadding="8"
  cellspacing="0"
>
  <tr>
    <td>
      <label for="Name">Name*:</label>
    </td>
    <td>
      <input
        name="Name"
        type="text"
        maxlength="60"
        style="width: 100%; max-width: 250px"
      />
    </td>
  </tr>
  <tr>
    <td>
      <label for="PhoneNumber">Phone number:</label>
    </td>
    <td>
      <input
        name="PhoneNumber"
        type="text"
        maxlength="43"
        style="width: 100%; max-width: 250px"
      />
    </td>
  </tr>
  <tr>
    <td>
      <label for="FromEmailAddress">Email address*:</label>
    </td>
    <td>
      <input
        name="FromEmailAddress"
        type="text"
        maxlength="90"
        style="width: 100%; max-width: 250px"
      />
    </td>
  </tr>
  <tr>
    <td>
      <label for="Comments">Comments*:</label>
    </td>
    <td>
      <textarea
        name="Comments"
        rows="7"
        cols="40"
        style="width: 100%; max-width: 350px"
      ></textarea>
    </td>
  </tr>
  <tr>
    <td>* - required fields</td>
    <td>
      <div style="float: right">
        <a
          href="https://www.100forms.com"
          id="lnk100"
          title="form to email"
          >form to email</a
        >
      </div>
      <input name="skip_Submit" type="submit" value="Submit" />
      <script
        src="https://www.100forms.com/js/FORMKEY:TFYA7QWDJKJ5/SEND:ar5555789@gmail.com"
        type="text/javascript"
      ></script>
    </td>
  </tr>
</table>
</form> */}