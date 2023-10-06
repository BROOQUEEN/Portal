// Анимация выезда для модального окна
const profileIcon = document.querySelector('.header_profile_img');
const profileSection = document.querySelector('.section_profile');
const nameFieldModal = document.querySelector('.profile_full_name');
nameFieldModal.contentEditable = 'true';

profileIcon.addEventListener('click', () => {
	profileSection.classList.toggle('section-profile-hide');
});


var modal_Updates = document.getElementById('new-update');
var modal_Update_btnClose = document.getElementById('new-update__btn-close');

var modal_Open_Updates = document.getElementById('update__add');

modal_Open_Updates.onclick = function () {
    modal_Updates.style.display = 'flex';
}
modal_Update_btnClose.onclick = function () {
    modal_Updates.style.display = 'none';
}


