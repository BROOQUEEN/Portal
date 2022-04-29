const btn = document.getElementById("open-modal");
const modal = document.getElementById("modal_sotrudniki_all");

const closeBtn = document.querySelector(".modal__close");

btn.onclick = () => {
	modal.classList.add("modal_active");

	closeBtn.addEventListener("click", closeModal);

	modal.addEventListener("click", hideModal);

	function closeModal() {
		modal.classList.remove("modal_active");
		closeBtn.removeEventListener("click", closeModal);
		modal.removeEventListener("click", hideModal);
	}

	function hideModal(event) {
		if (event.target === modal_sotrudniki_all)  {
			closeModal();
		}
	}
};




const modal = document.getElementById("modal_sotrudniki_create");