$(".openmodal").one("click", showModal);
    const igLoginBox = document.getElementById('ig-login-flow-wrapper');
    function showModal() {
        igLoginBox.classList.toggle('hidden');
};