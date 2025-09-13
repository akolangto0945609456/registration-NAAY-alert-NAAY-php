const form = document.getElementById("registrationForm");

form.addEventListener("submit", function(e) {
  let isValid = true;
  document.querySelectorAll(".error").forEach(el => el.textContent = "");

  if (document.getElementById("firstName").value.trim() === "") {
    document.getElementById("firstNameError").textContent = "First name is required.";
    isValid = false;
  }
  // Middlename validation
  if (document.getElementById("middleName").value.trim() === "") {
    document.getElementById("middleNameError").textContent = "Middle name is required.";
    isValid = false;
  }
  if (document.getElementById("lastName").value.trim() === "") {
    document.getElementById("lastNameError").textContent = "Last name is required.";
    isValid = false;
  }
  const contact = document.getElementById("contact").value.trim();
  if (!/^[0-9]{11}$/.test(contact)) {
    document.getElementById("contactError").textContent = "Enter 11 digit number.";
    isValid = false;
  }
  const email = document.getElementById("email").value.trim();
  if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
    document.getElementById("emailError").textContent = "Enter a valid email.";
    isValid = false;
  }
  if (document.getElementById("course").value.trim() === "") {
    document.getElementById("courseError").textContent = "Course is required.";
    isValid = false;
  }
  const batch = document.getElementById("batch").value.trim();
  if (!/^\d+$/.test(batch)) {
    document.getElementById("batchError").textContent = "Batch must be numbers only (e.g., 33).";
    isValid = false;
  }
  const studentId = document.getElementById("studentId").value.trim();
  const idPattern = /^\d{4}-\d{2}-\d{3}$/;
  if (!idPattern.test(studentId)) {
    document.getElementById("idError").textContent = "Enter a valid ID (Format: YYYY-NN-NNN)";
    isValid = false;
  }
  if (!isValid) e.preventDefault();
});
