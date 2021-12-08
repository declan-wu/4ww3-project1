// Validate login
function validate(form) {
  // Check that fields are not empty
  // Double bang changes any type into a boolean, one more bang to negate it
  // Return false at the end of any condition so that the form does not submit
  // and the user's input does not clear

  if (!!!form["email"].value) {
      alert("Email cannot be empty");
      return false;
  } else if (!validateEmail(form["email"].value)) {
      alert("Email is not valid");
      return false;
  }

  let pw = form["password"].value;
  if (!!!pw) {
      alert("Password cannot be empty");
      return false;
  } else {
      if (pw.length < 8) {
      alert("Password must be minimum 8 characters long")
      return false;
      }
  }

  // https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
  // I know this is copy-pasted but I don't think there's a better way of doing it :)
  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
}
