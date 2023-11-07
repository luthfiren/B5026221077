// Validasi nama
function validateName() {
    const nameInput = document.getElementById("name");
    const name = nameInput.value;

    // Nama harus terdiri dari huruf saja
    if (!name.match(/^[a-zA-Z]+$/)) {
      nameInput.classList.add("is-invalid");
      alert("Nama harus terdiri dari huruf saja.");
      return false;
    } else {
      nameInput.classList.remove("is-invalid");
      return true;
    }
  }

  // Validasi email
  function validateEmail() {
    const emailInput = document.getElementById("email");
    const email = emailInput.value;

    // Email harus memiliki format yang benar
    if (!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
      emailInput.classList.add("is-invalid");
      alert("Email tidak valid.");
      return false;
    } else {
      emailInput.classList.remove("is-invalid");
      return true;
    }
  }

  // Validasi form
  function validateForm() {
    // Validasi nama
    if (!validateName()) {
      return false;
    }

    // Validasi email
    if (!validateEmail()) {
      return false;
    }

    // Validasi pesan
    // Tidak perlu validasi

    return true;
  }

  // Bind event listener
  document.getElementById("submit").addEventListener("click", validateForm);
