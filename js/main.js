// Функция верификации e-mail
function isEmail(email) {
	var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return regex.test(email);
}

/*Test*/ 

jQuery(document).ready(function($) {
	
	/*Слайдер На главной*/
	$('.main-bnr .container').slick({
		dots: true,
		arrows: false
	});
	  
	
	/*Слайдер - на странице товара*/
	$('.tovar_slider').slick({
		prevArrow: '<div class="slider-arrow slider-bizi-prev"></div>',
		nextArrow: '<div class="slider-arrow slider-bizi-next"></div>',
		arrows: true,
		dots: true
	});
	
	/*Слайдер отзывов*/
	$('.reviews-slider').slick({
	
		prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
		nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
		slidesToShow: 2,
		responsive: [
		  {
			breakpoint: 824,
			settings: {
			  slidesToShow: 1,
			}
		},
	  ]
	});
	

	// Сразу маскируем все поля телефонов
	var inputmask_phone = {"mask": "+7(999)999-99-99"};
	jQuery("input[type=tel]").inputmask(inputmask_phone);

	// Типовой скрипт для отправки сообщений на почту

	jQuery("#clsubmit").click(function(){ 

		e.preventDefault();

		var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'send_mail',		
						nonce: allAjax.nonce,
						formsubject: jQuery("#formsubject").val(),
					}
					
		);
				
				
		jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
					document.location.href = 'https://osagoprofi.su/stranica-blagodarnosti';	
		});
				
		jqXHR.fail(function (responce) {
					jQuery('#messgeModal #lineMsg').html("Произошла ошибка. Попробуйте позднее.");
					jQuery('#messgeModal').arcticmodal();
		});
	});
});


// Что то про меню

// const icons = document.querySelectorAll('.icon');
// icons.forEach (icon => {  
// 	icon.addEventListener('click', (event) => {
//     icon.classList.toggle("open");
//   });
// });

// $(function () {
//   $('.mobile_menu-svg').click(function () {
//     $('.main-mobile-menu').toggleClass('mobile-menu')
//     $('body').toggleClass('lock')
//   })  
// });


/* При нажатии кнопки, переключаться между скрытием 
и отображением раскрывающегося содержимого */
function myFunction() {
    document.getElementById("submenu").classList.toggle("submenu-content");
}

// Закроется раскрывающееся меню, если щелкаем вне его
window.onclick = function(event) {
  if (!event.target.matches('.mobile-menu__btn')) {

    var dropdowns = document.getElementsByClassName("submenu-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
