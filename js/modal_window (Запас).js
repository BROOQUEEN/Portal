const modal_window_links = document.querySelectorAll('.modal-window-link');
const body = documant.querySelector('body');
const lockPadding = documant.query.querySelectorAll(".lock-padding");

let unlock = true; // Чтобы небыло двойных нажатии

const timeout = 800;

if (modal_window_links.length > 0) {
	for (let index = 0; index < modal_window_links.length; index++) {
		const modal_window_link = modal_window_link[index];
		modal_window_link.addEventListener("click", function (e) {
			const modal_window_name = modal_window_link.getAttribute('href').replace('#', '');
			const curent_modal_window = document.getElementById(modal_window_name);
			modal_window_open(current_modal_window);
			e.preventDefault();	// запрет перезагрузки страницы
		});
	}
}
const modal_window_close_icon = document.querySelectorAll('.close-modal-window');
if (modal_window_close-icon.length > 0) {
	for (let index = 0; index < modal_window_close-icon.length; index++) {
		const el = modal_window_close-icon[index];
		el.addEventListener('click', function (e) {
			modal_window_close(el.closest('.modal_window'));
			e.preventDefault();
		})
	}
}

function modal_window_open(current_modal_window) {
	if (current_modal_window && unlock) {
		const modal_window_active = document.querySelector('.modal_window.open');
		if (modal_window_active) {
			modal_window_close(modal_window_active, false);
		} else {
			bodyLock();
		}
		current_modal_window.classList.add('open');
		current_modal_window.addEventListener("click", function (e) {
			if (!e.target.closest('modal_window_content')) {
				modal_window_close(e.target.closest('.modal_window'));
			}
		});
	}
}
function modal_window_close(modal_window_active, doUnlock = true) {
	if (unlock) {
		modal_window_active.classList.remove('open');
		if (doUnlock) {
			bodyUnlock();
		}
	}
}

function bodyLock() {
	const lockPaddingValue = window.innerWidth - documant.querySelector('.wrapper').offsetWidth + 'px';

	for (let index = 0; index < lockPadding.length; index++) {
		const el = lockPadding[index];
		el.style.paddingRight = lockPaddingValue;
	}
	body.style.paddingRight = lockPaddingValue;
	body.classList.add('lock');

	unlock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}

function bodyUnlock() {
	setTimeout(function () {
		for (let index = 0; index < lockPadding.length; index++) {
			const el = lockPadding[index];
			el.style.paddingRight = '0px';
		}
		body.style.paddingRight = '0px';
		body.classList.remove('lock');
	} , timeout);

	unlock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}