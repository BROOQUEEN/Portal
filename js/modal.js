// Анимация выезда для модального окна
const profileIcon = document.querySelector('.header_profile_img');
const profileSection = document.querySelector('.section_profile');
const nameFieldModal = document.querySelector('.profile_full_name');
nameFieldModal.contentEditable = 'true';

profileIcon.addEventListener('click', () => {
	profileSection.classList.toggle('section-profile-hide');
});


