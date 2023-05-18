const alerts = document.getElementsByClassName("alert-component");
for (let index = 0; index < alerts.length; index++) {
    const toast = new bootstrap.Toast(alerts[index]);
    toast.show()
}