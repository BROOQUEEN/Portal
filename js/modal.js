const btn_sotr_read = document.getElementById("open-modal-read");
const modal_sotr_all = document.getElementById("modal_sotrudniki_all");

const closeBtn = document.querySelector(".modal__close");


btn_sotr_read.onclick = () => {
	modal_sotr_all.classList.add("modal_active");

	closeBtn.addEventListener("click", closeModal);

	modal_sotr_all.addEventListener("click", hideModal);

	function closeModal() {
		modal_sotr_all.classList.remove("modal_active");
		closeBtn.removeEventListener("click", closeModal);
		modal_sotr_all.removeEventListener("click", hideModal);
	}

	function hideModal(event) {
		if (event.target === modal_sotrudniki_all)  {
			closeModal();
		}
	}
};


