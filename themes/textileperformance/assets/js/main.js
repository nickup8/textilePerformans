const buttons = document.querySelectorAll('.button_function');
const overlayModal = document.querySelector('.overlay_modal');
const modalWrapper = document.querySelector('.modal_wrapper');
const modal = document.querySelector('.modal');
const modalHeadline = document.querySelector('.modal_h3');
const modalCloseButton = document.querySelector('.modal_button_close');

buttons.forEach((button) => {
	button.addEventListener('click', () => {
		modal.classList.remove('animate__animated', 'animate__fadeOutRight');
		modalHeadline.innerHTML = button.innerHTML;
		modalWrapper.classList.add('active');
		modal.classList.add(
			'animate__animated',
			'animate__fadeInLeft',
			'animate__faster'
		);
	});
});

const hideModal = (element) => {
	element.addEventListener('click', () => {
		modal.classList.add('animate__animated', 'animate__fadeOutRight');
		setTimeout(() => {
			modalWrapper.classList.remove('active');
		}, 500);
	});
};

hideModal(overlayModal);
hideModal(modalCloseButton);

// home tabs

const tabButtons = document.querySelectorAll('.services_tab_link');
const tabContents = document.querySelectorAll('.services_content_img');

tabButtons.forEach((tabButton) => {
	tabButton.addEventListener('click', () => {
		let tabAttr = tabButton.getAttribute('data-tab');
		let tabContent = document.querySelector(tabAttr);
		if (!tabButton.classList.contains('active')) {
			tabButtons.forEach((tabButton) => {
				tabButton.classList.remove('active');
			});

			tabButton.classList.add('active');

			tabContents.forEach((item) => {
				item.classList.remove('active');
			});

			tabContent.classList.add('active');
		}
	});
});

// swiper slider

/* open slider */

const sliderWorksPage = document.querySelector('.slider_works_page');

const worksItems = document.querySelectorAll('.works_content_item');
const workSliderWrapper = document.querySelector('.slider_works_wrapper');

worksItems.forEach((item, indexItem) => {
	item.addEventListener('click', () => {
		workSliderWrapper.innerHTML = null;
		const worksItemsArrey = [].slice.call(worksItems);
		sliderWorksPage.classList.add('active');
		worksItemsArrey.map((workItemNode, indexItemNode) => {
			let sliderClass;
			if (indexItem === indexItemNode) {
				sliderClass = 'swiper-slide-activ';
			} else if (indexItemNode - indexItem == 1) {
				sliderClass = 'swiper-slide-next';
			} else if (indexItem - indexItemNode == 1) {
				sliderClass = 'swiper-slide-prev';
			} else {
				sliderClass = '';
			}
			workSliderWrapper.insertAdjacentHTML(
				'beforeend',
				`<div class="swiper-slide slider_works_slide ${sliderClass}">
			<div class="slider_works_grid">
				<div class="slider_works_slide_images">
					<img
						class="slider_works_slide_img"
						src="${workItemNode
							.querySelector('.works_content_item_img')
							.getAttribute('src')}"
						alt=""
					/>
				</div>
				<div class="slider_works_slide_content">
					<div class="slider_works_slide_text">
						<h3 class="h3 slider_h3">${
							workItemNode.querySelector('.works_content_item_title').innerHTML
						}</h3>
						<div class="slider_works_slide_desription">
						${workItemNode.querySelector('.works_content_item_description').innerHTML}
						</div>
					</div>
					<div class="slider_works_button">
						<button class="button slider_button">Хочу так же</button>
					</div>
				</div>
			</div>
		</div>`
			);

			const swiper = new Swiper('.slider_works', {
				// Optional parameters
				initialSlide: indexItem,
				// If we need pagination
				pagination: {
					el: '.swiper-pagination',
				},

				// Navigation arrows
				navigation: {
					nextEl: '.slider_button_next',
					prevEl: '.slider_button_prev',
				},
			});
		});
	});
});

const sliderOverlay = document.querySelector('.slider_overlay');

if (sliderOverlay) {
	sliderOverlay.addEventListener('click', () => {
		sliderWorksPage.classList.remove('active');
	});
}

// servises slider

const swiper = new Swiper('.services_slider', {
	slidesPerView: 3,
	spaceBetween: 24,
	scrollbar: {
		el: '.swiper-scrollbar',
		dragClass: 'services_slider_drag',
	},
	navigation: {
		nextEl: '.slider_button_next',
		prevEl: '.slider_button_prev',
	},
});

const swiper2 = new Swiper('.aboute_slider', {
	slidesPerView: 4.5,
	spaceBetween: 24,
	loop: true,
	autoplay: {
		delay: 2000,
	},
});

// plug timer
const plug = document.querySelector('.plug');
// конечная дата, например 1 июля 2021
if (plug) {
	const deadline = new Date('2023', '11', '31');
	// id таймера
	let timerId = null;
	// склонение числительных
	function declensionNum(num, words) {
		return words[
			num % 100 > 4 && num % 100 < 20
				? 2
				: [2, 0, 1, 1, 1, 2][num % 10 < 5 ? num % 10 : 5]
		];
	}
	// вычисляем разницу дат и устанавливаем оставшееся времени в качестве содержимого элементов
	function countdownTimer() {
		const diff = deadline - new Date();
		if (diff <= 0) {
			clearInterval(timerId);
		}
		const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
		const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
		const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
		const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
		$days.textContent = days < 10 ? '0' + days : days;
		$hours.textContent = hours < 10 ? '0' + hours : hours;
		$minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
		$seconds.textContent = seconds < 10 ? '0' + seconds : seconds;
		$daysTitle.textContent = declensionNum(days, ['день', 'дня', 'дней']);
		$hoursTitle.textContent = declensionNum(hours, ['час', 'часа', 'часов']);
		$minutesTitle.textContent = declensionNum(minutes, [
			'минута',
			'минуты',
			'минут',
		]);
		$secondsTitle.textContent = declensionNum(seconds, [
			'секунда',
			'секунды',
			'секунд',
		]);
	}
	// получаем элементы, содержащие компоненты даты
	const $days = document.querySelector('.plug_timer_day_count');
	const $daysTitle = document.querySelector('.plug_timer_day_title');
	const $hours = document.querySelector('.plug_timer_hour_count');
	const $hoursTitle = document.querySelector('.plug_timer_hour_title');
	const $minutes = document.querySelector('.plug_timer_minutes_count');
	const $minutesTitle = document.querySelector('.plug_timer_minutes_title');
	const $seconds = document.querySelector('.plug_timer_seconds_count');
	const $secondsTitle = document.querySelector('.plug_timer_seconds_title');
	// вызываем функцию countdownTimer
	countdownTimer();
	// вызываем функцию countdownTimer каждую секунду
	timerId = setInterval(countdownTimer, 1000);
}

// phone attributes
const phones = document.querySelectorAll('.phone');


if(phones){
    phones.forEach((phone) => {
        let phoneContent = phone.textContent.trim().split(' ').join('').split('(').join('').split(')').join('').split('-').join('');
        phone.setAttribute('href', `tel:${phoneContent}`);
    })
}
