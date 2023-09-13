// ----------------------------SUCCESS ALERT----------------------------------------
function notifySuccess(message) {
    iziToast.destroy();
    iziToast.success({
        title: 'Success!',
        message: message,
        timeout: 2000,
        position: 'topRight',
    })
}
// -----------------------------FAILURE ALERT--------------------------------------
function notifyError(message) {
    iziToast.destroy();
    iziToast.error({
        title: 'Alert!',
        message: message,
        timeout: 2000,
        position: 'topRight',
    })
}