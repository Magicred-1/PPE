document.addEventListener("DOMContentLoaded", e => {
    console.log(navigator.userAgent);

    changeInfos = document.querySelector("#changeInfos");
    deleteUser = document.querySelector("#deleteUser");
    

    formInfos = document.querySelector("#userInfosForm");
    formInfos.hidden = true;

    deleteForm = document.querySelector("#deleteForm");
    deleteForm.hidden = true;

    hideDeleteForm = () => {
        formInfos.hidden = false;
        changeInfos.hidden = true;
        deleteForm.hidden = true;
    };

    hideDeleteUser = () => {
        deleteForm.hidden = false;
        formInfos.hidden = true;
    };


    changeInfos.addEventListener("click", e => {
        hideDeleteForm();
    });

    deleteUser.addEventListener("click", e => {
        hideDeleteUser();
    });

});