function func() {
	const profileIcon = document.querySelector('.header_profile_img');
	const profileSection = document.querySelector('.section_profile');
	profileIcon.addEventListener('click', () => {
		profileSection.classList.toggle('section-profile-hide');
	})
};

func();