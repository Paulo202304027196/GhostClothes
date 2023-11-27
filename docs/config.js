function validateFields() {
    const email = document.getElementById("email").value;
    if (!email) {
        document.getElementById('recovery-password-button').disabled =
    }
}