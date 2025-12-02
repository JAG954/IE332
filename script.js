
const alertList = document.querySelectorAll('.alert');
const alerts = [...alertList].map(el => new bootstrap.Alert(el));

function showAlert() {
  const alertBox = document.getElementById("featureAlert");
  alertBox.style.display = "flex";
  alertBox.classList.add("show");
  document.body.classList.add("alert-active");
}

function hideAlert() {
  const alertBox = document.getElementById("featureAlert");
  alertBox.classList.remove("show");
  document.body.classList.remove("alert-active");
  setTimeout(() => {
    alertBox.style.display = "none";
  }, 150);
}

document.adddEventListener("DOMContentLoaded", () => {
    const loginFailed = document.body.dataset.loginFailed === 'true';
    if (loginFailed) {
        showAlert();
    }
})

