<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
	->add_tab( __( 'Контакты' ), array(
		Field::make( 'text', 'st_caompany', 'Организация' ),
		Field::make( 'text', 'st_inn', 'ИНН' ),
		Field::make( 'text', 'st_ogrn', 'ОГРН' ),
		Field::make( 'text', 'st_phone', 'Телефон' ),
		Field::make( 'text', 'st_worktime', 'Время работы' ),
    ));
?>