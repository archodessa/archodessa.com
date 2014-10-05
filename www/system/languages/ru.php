<?

// display_name = Русский

function e2l_load_strings () {

  return array (
  // engine
  'e2--vname-aegea' => 'Эгея',
  'e2--release' => 'релиз',
  'e2--powered-by' => 'Движок —',
  'e2--default-blog-title' => 'Мой блог',
  'e2--default-blog-author' => 'Автор блога',
  
  // installer
  'pt--install' => 'Установка',
  'gs--user-fixes-needed' => 'Так, нужно кое-что поправить.',
  'gs--following-folders-missing' => 'Не найдены следующие папки из дистрибутива движка:',
  'gs--could-not-create-them-automatically' => 'Создать их автоматически не удалось из-за недостатка прав. Загрузите на сервер полный дистрибутив.',
  'gs--let-scripts-write-to-following-folders' => 'Дайте скриптам права на запись в папках:',
  'gs--and-reload-installer' => 'И перезагрузите установщик',
  'fb--begin' => 'Начать',
  'er--no-password-entered' => 'Вы не ввели пароль',
  'er--file-write-failed-blame-rights' => 'Возникли проблемы при записи файлов, возможно недостаточно прав доступа',
  'er--double-check-db-params' => 'Перепроверьте реквизиты базы',
  'gs--instantiated-version' => 'Инстанциирована версия',
  'pt--installer-loading' => 'Загрузка...',
  'gs--database' => 'База данных',
  'gs--password-for-blog' => 'Пароль для доступа к блогу',
  'ff--just-connect' => 'Данные в моей базе уже есть, нужно просто подключиться к ней',
  'ff--prefix-occupied' => 'уже занят',
  'ff--tables-not-found' => 'таблиц не найдено',

  
  // sign in
  'pt--sign-in' => 'Вход',

  // archive
  'pt--nth-year' => '$[year]-й год',
  'pt--nth-month-of-nth-year' => '$[month.monthname] $[year] года',
  'pt--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year]-го',
  'gs--nth-month-of-nth-year' => '$[month.monthname] $[year]',
  'gs--nth-day-of-nth-month-of-nth-year' => '$[day] $[month.monthname.genitive] $[year]',
  'gs--everything' => 'Всё',
  'gs--part-x-of-y' => 'часть $[part] из $[of]',
  
  // posts
  'ln--new-post' => 'Новое здание',
  'bt--close-comments-to-post' => 'Закрыть комментарии к зданию',
  'bt--open-comments-to-post' => 'Открыть комментарии к зданию',
  'pt--new-post' => 'Новое здание',
  'pt--edit-post' => 'Правка здания',
  'er--post-must-have-title-and-text' => 'У здания должны быть название и текст',
  'er--error-publishing-post' => 'Ошибка при публикации здания',
  'er--error-updating-post' => 'Ошибка при изменении здания',
  'er--error-deleting-post-tag-info' => 'Ошибка при удалении данных о тегах здания',
  'er--error-deleting-post' => 'Ошибка при удалении здания',
  'er--wrong-datetime-format' => 'Неправильный формат даты-времени. Должен быть: «ДД.ММ.ГГГГ ЧЧ:ММ:СС»',
  'er--cannot-get-post-from-db' => 'Не удалось извлечь здание из базы',
  'er--images-only-supported' => 'Поддерживаются только изображения',
  'er--cannot-create-thumbnail' => 'Не удалось создать уменьшенное изображение (возможно, нет доступа к папке /pictures/thumbs/)',
  'er--cannot-upload-image' => 'Не удалось загрузить изображение',
  'ff--title' => 'Название',
  'ff--text' => 'Текст',
  'ff--text-formatting' => 'Форматирование текста',
  'ff--saving' => 'Сохранение...',
  'ff--save' => 'Сохранить',
  'ff--tags' => 'Теги',
  'ff--alias' => 'Ссылка',
  'ff--change-time' => 'Изменить время',
  'ff--delete' => 'Удалить',
  'ff--will-get-address' => 'Получит адрес',
  'ff--is-at-address' => 'Опубликована по адресу',

  'ff--gmt-offset' => 'Разница с Гринвичем',
  'ff--with-dst' => '+1 летом',
  'ff--post-time' => 'Время публикации',
  
  'pt--post-deletion' => 'Удаление здания',
  'gs--post-will-be-deleted' => 'Здание «$[post]» будет удалено вместе со всеми комментариями.',

  // frontpage 
  'er--cannot-show-latest-notes' => 'Невозможно отобразить последние здания',
  'nm--posts' => 'Здания',
  'gs--next-posts' => 'следующие',
  'gs--prev-posts' => 'предыдущие',
  
  // drafts
  'ln--drafts' => 'Черновики',
  'pt--drafts' => 'Черновики',
  'wd--draft' => 'черновик',
  'pt--draft-deletion' => 'Удаление черновика',
  'pt--edit-draft' => 'Правка черновика',
  'gs--draft-will-be-deleted' => 'Черновик «$[draft]» будет удалён.',
  
  // comments
  'pt--new-comment' => 'Новый комментарий',
  'pt--edit-comment' => 'Правка комментария',
  'pt--reply-to-comment' => 'Ответ на комментарий',
  'pt--edit-reply-to-comment' => 'Правка ответа на комментарий',
  'pt--unsubscription-done' => 'Получилось!',
  'pt--unsubscription-failed' => 'Не получилось',
  'gs--you-are-not-subscribed' => 'Кажется, вы и так не подписаны на комментарии к этому зданию',
  'gs--you-are-no-longer-subscribed' => 'Вы больше не подписаны на комментарии к зданию',
  'gs--unsubscription-didnt-work' => 'Почему-то отписка не сработала',          
  'gs--comment-not-found' => 'Комментарий не найден',
  'gs--post-not-found' => 'Здание не найдено',
  'gs--comment-too-long' => 'Слишком длинный комментарий',
  'gs--comment-too-long-description' => 'Вы отправили слишком длинный комментарий, поэтому он не был сохранён.',
  'gs--comment-double-post' => 'Повторный комментарий',
  'gs--comment-double-post-description' => 'Вы отправили комментарий дважды, сохранён был только один.',
  'gs--comment-spam-suspect' => 'Комментарий похож на спам',
  'gs--comment-spam-suspect-description' => 'Простите, но робот решил, что это спам, поэтому комментарий не был отправлен.',
  'gs--you-are-already-subscribed' => 'Вы подписаны на комментарии. Ссылка для отписки приходит в каждом письме с новым комментарием.',
  'er--error-removing-comment' => 'Ошибка при удалении комментария',
  'er--error-removing-comment-reply' => 'Ошибка при удалении ответа на комментарий',
  'er--post-not-commentable' => 'Это здание нельзя комментировать',
  'er--name-email-text-required' => 'И имя, и эл. адрес, и текст комментария обязательны',
  'er--error-editing-comment-reply' => 'Ошибка при изменении ответа на комментарий',
  'ff--notify-subscribers' => 'Отправить по почте комментатору и другим подписчикам',
  'gs--your-comment' => 'Ваш комментарий',
  'ff--full-name' => 'Имя и фамилия',
  'ff--email' => 'Эл. почта',
  'gs--email-wont-be-published' => 'адрес не будет опубликован',
  'gs--no-html' => 'ХТМЛ не работает',
  'ff--subscribe-to-others-comments' => 'Получать комментарии других по почте',
  'gs--comment-restore' => 'Вернуть',
  'ff--text-of-your-comment' => 'Текст вашего комментария',
  'gs--n-comments' => '$[number.cardinal]',
  'gs--no-comments' => 'нет комментариев',
  'gs--comments-all-one-new' => 'новый',
  'gs--comments-all-new' => 'новые',
  'gs--comments-n-new' => '$[number.cardinal]',
  
  // tags
  'pt--tags' => 'Теги',
  'pt--posts-tagged' => 'Здания с тегом',
  'tt--edit-tag' => 'Править параметры и описание тега',
  'gs--tagged' => 'с тегом',
  'pt--tag-edit' => 'Изменение тега',
  'pt--tag-delete' => 'Удаление тега',
  'pt--posts-without-tags' => 'Здания без тегов',
  'gs--no-posts-without-tags' => 'Зданий без тегов нет.',
  'er--bad-tag-urlname' => 'Такой вид в адресной строке не может быть использован',
  'er--error-updating-tag' => 'Ошибка при обновлении тега',
  'er--cannot-rename-tag' => 'Такое имя или вид в адресной строке уже используются другим тегом',
  'er--error-deleting-tag' => 'Ошибка при удалении тега',
  'ff--tag-name' => 'Название',
  'ff--tag-urlname' => 'В адресной строке',
  'ff--tag-description' => 'Описание',
  'gs--tag-will-be-deleted-notes-remain' => 'Тег «$[tag]» будет удалён из зданий, но сами здания останутся.',
  'gs--see-also-tag' => 'См. также тег',
  'gs--tags-important' => 'важные',
  'gs--tags-all' => 'все',
  'gs--tags' => 'Теги',
  
  // most commented and favourites
  'pt--most-commented' => 'Самые комментируемые за $[period.periodname]',
  'nm--most-commented' => 'Обсуждаемое',
  'pt--favourites' => 'Избранное',
  'nm--favourites' => 'Избранное',
  'gs--no-favourites' => 'Избранного нет.',
  
  // generic posts pages
  'nm--pages' => 'Страницы',
  'gs--next-page' => 'следующая',
  'gs--prev-page' => 'предыдущая',
  'gs--earlier' => 'Ранее',
  'gs--later' => 'Позднее',
  'pt--n-posts' => '$[number.cardinal]',
  'pt--no-posts' => 'Нет зданий',

  // search
  'pt--search' => 'Поиск',
  'pt--search-query-empty' => 'Текст для поиска пуст',
  'pt--search-query-too-short' => 'Слишком короткий текст',
  'gs--found-for-query' => 'по запросу',
  'gs--search-query-empty' => 'Текст для поиска пуст, напишите что-нибудь',
  'gs--search-query-too-short' => 'Слишком короткий текст, напишите хотя бы 4 буквы.',
  'gs--nothing-found' => 'Ничего не найдено.',
  'gs--many-posts' => 'Много зданий',
  'pt--search-results' => 'Результаты поиска',
  
  // password, sessions, settings
  'pt--password' => 'Пароль',
  'pt--password-for-blog' => 'Пароль для доступа к сайту',
  'fb--change' => 'Поменять',
  'gs--password-changed' => 'Пароль изменён',
  'er--could-not-change-password' => 'Не получилось изменить пароль',
  'er--wrong-password' => 'Неправильный пароль',
  'ff--displayed-as-plain-text' => 'отображается при вводе',

  'pt--sessions' => 'Открытые сессии',
  'gs--sessions-description' => 'Когда вы заходите под своим паролем на нескольких устройствах или с помощью нескольких браузеров, здесь показывается список всех таких сессий. Если какая-то из них вызывает подозрения, завершите все сессии кроме текущей, а потом смените пароль от блога.',
  'gs--sessions-browser-or-device' => 'Браузер или устройство',
  'gs--sessions-when' => 'Когда',
  'gs--sessions-from-where' => 'Откуда',
  'gs--locally' => 'локально',
  'gs--unknown' => 'неизвестен',
  'fb--end-all-sessions-but-this' => 'Завершить все сессии кроме текущей',
  'gs--ua-iphone' => 'Айфон',
  'gs--ua-ipad' => 'Айпад',
  'gs--ua-opera' => 'Опера',
  'gs--ua-firefox' => 'Фаерфокс',
  'gs--ua-chrome' => 'Хром',
  'gs--ua-safari' => 'Сафари',
  'gs--ua-unknown' => 'Неизв.',
  'gs--ua-for-mac' => 'на Маке',

  'pt--settings' => 'Настройка',
  'ff--language' => 'Язык',
  'ff--theme' => 'Оформление',
  'ff--theme-how-to' => 'Как создать свою тему?',
  'ff--theme-selector-wants-js' => 'Для выбора темы оформления, включите в браузере поддержку скриптов (JavaScript).',
  'ff--posts' => 'Здания',
  'ff--items-per-page-before' => 'Показывать по',
  'ff--items-per-page-after' => 'на странице',
  'ff--show-favourites' => 'Показывать блок «Избранное»',
  'ff--comments' => 'Комментарии',
  'ff--comments-enable' => 'Разрешать',
  'ff--only-for-recent-posts' => 'только к свежим зданиям',
  'ff--show-hot' => 'и показывать блок «Обсуждаемое»',
  'ff--send-to-address' => 'и присылать по почте на адрес:',
  'ff--administration' => 'Администрирование:',
  'gs--password' => 'пароль',
  'gs--db-connection' => 'соединение с базой',

  'pt--name-and-author' => 'Название и автор',
  'ff--blog-title' => 'Название блога',
  'ff--blog-description' => 'Коротко о сайте',
  'ff--blog-author' => 'Автор',

  'pt--database' => 'База данных',
  'ff--db-host' => 'Сервер',
  'ff--db-username-and-password' => 'Имя пользователя и пароль',
  'ff--db-name' => 'Название базы',
  'ff--db-prefix' => 'Префикс таблиц',
  'fb--connect-to-this-db' => 'Подключиться с этими параметрами',
  'er--cannot-save-data' => 'Не получается сохранить данные',
  
  'ff--changing-sidebar' => 'Как изменить эту колонку?',
  
  // need for password
  'gs--need-password' => 'Зайдите под своим паролем',
  'ff--public-computer' => 'Чужой компьютер',
  'gs--need-password-for-action' => 'Чтобы $[action]<br />зайдите под своим паролем',
  'gs--np-action-write' => 'написать о здании',
  'gs--np-action-note-edit' => 'править здание',
  'gs--np-action-comment-edit' => 'править этот комментарий',
  'gs--np-action-comment-reply' => 'ответить на этот комментарий',
  'gs--np-action-drafts' => 'открыть черновики',
  'gs--np-action-draft' => 'открыть этот черновик',
  'gs--np-action-tag-edit' => 'править этот тег',
  'gs--np-action-name-and-author' => 'изменять название сайта',
  'gs--np-action-settings' => 'настраивать блог',
  'gs--np-action-password' => 'изменять пароль',
  'gs--np-action-database' => 'изменять параметры базы данных',
  'gs--np-action-sessions' => 'просматривать сессии',
  'gs--frontpage' => 'Главная страница',
  
  // form buttons
  'fb--submit' => 'Отправить',
  'fb--save-changes' => 'Сохранить изменения',
  'fb--save-and-preview' => 'Сохранить и посмотреть',
  'fb--publish' => 'Опубликовать',
  'fb--publish-draft' => 'Опубликовать здание',
  'fb--select' => 'Выбрать',
  'fb--apply' => 'Применить',
  'fb--delete' => 'Удалить',
  'fb--edit' => 'Править',
  'fb--sign-in' => 'Войти',
  'fb--sign-out' => 'Выйти',
  
  // time
  'pt--default-timezone' => 'Часовой пояс по умолчанию',
  'gs--e2-stores-each-posts-timezone' => 'Е2 хранит часовой пояс отдельно для каждого здания.',
  'gs--e2-autodetects-timezone' => 'При публикации часовой пояс обычно определяется автоматически. А в случае неудачи используется выбранный здесь часовой пояс.',

  'tt--from-the-future' => 'Из будущего',
  'tt--just-published' => 'Только что',
  'tt--one-minute-ago' => 'Минуту назад',
  'tt--minutes-ago' => '$[minutes.cardinal] назад',
  'tt--one-hour-ago' => 'Час назад',
  'tt--hours-ago' => '$[hours.cardinal] назад',
  'tt--today-at' => 'Сегодня в $[time]',
  'tt--date-and-time' => '$[day] $[month.monthname.genitive], $[time]',
  'tt--date-year-and-time' => '$[day] $[month.monthname.genitive] $[year], $[time]',

  'tt--zone-pt' => 'Тихоокеанское время',
  'tt--zone-mt' => 'Горное время',
  'tt--zone-ct' => 'Центральное время',
  'tt--zone-et' => 'Восточное время',
  'tt--zone-gmt' => 'Время по Гринвичу',
  'tt--zone-cet' => 'Центрально-европейское время',
  'tt--zone-eet' => 'Восточно-европейское время',
  'tt--zone-msk' => 'Московское время',
  'tt--zone-ekt' => 'Челябинское время',
  'gs--timezone-offset-hours' => 'ч',
  'gs--timezone-offset-minutes' => 'мин',
  
  // mail
  'em--comment-new-to-author-subject' => '$[commenter] комментирует $[note-title]',
  'em--comment-new-to-public-subject' => '$[commenter] комментирует $[note-title]',
  'em--comment-reply-to-public-subject' => '$[blog-author] отвечает на комментарий',
  'em--comment-reply' => '$[note-title] ($[blog-author] ответил)',
  'em--created-automatically' => 'Письмо создано автоматически.',
  'em--unsubscribe' => 'Отписаться от этого обсуждения',
  'em--reply' => 'Ответить',
  'em--comment-replied-at' => 'Комментарий, на который ответил автор',
  
  // rss
  'nf--comments-on-this-post' => 'Комментарии к этому зданию',
  'gs--comments-on-post' => 'комментарии к зданию',
  'gs--comment-on-post' => 'комментарий к зданию',
  'gs--posts-tagged' => 'здания с тегом',
  'gs--search-results' => 'результаты поиска',

  // umacros
  'um--month' => '$[month.monthname]',
  'um--month-short' => '$[month.monthname.short]',
  'um--month-g' => '$[month.monthname.genitive]',
  
  // more strings
  'gs--no-such-notes' => 'Таких зданий нет.',
  'pt--page-not-found' => 'Страница не найдена',
  'gs--page-not-found' => 'Страница не найдена.',
  
  'er--cannot-find-db' => 'Не могу найти базу данных',
  'er--cannot-connect-to-db' => 'Не могу соединиться с базой данных',
  'er--error-in-query' => 'Ошибка при запросе',
  'er--error-occurred' => 'Произошла ошибка',
  'er--too-many-errors' => 'Слишком много ошибок',
  'gs--rss' => 'РСС',
  
  'gs--pgt' => 'Время генерации',
  'gs--seconds-contraction' => 'с',
  'gs--updated-successfully' => 'Выполнено обновление с версии $[from] до версии $[to]',
  'gs--preview-of-future-blog' => 'Так будет выглядеть движок изнутри после того как вы напишете что-нибудь:',
  'gs--good-blogs' => 'Хорошие блоги и сайты',
  
  );
  
}



function e2lstr_monthname ($number, $modifier = '') {
  if ($modifier == 'genitive') {
    $tmp = array (
      'декабря', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
      'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря', 'января'
    );
  } elseif ($modifier == 'short') {
    $tmp = array (
      'дек', 'янв', 'фев', 'март', 'апр', 'май', 'июнь',
      'июль', 'авг', 'сен', 'окт', 'ноя', 'дек', 'янв'
    );
  } else {
    $tmp = array (
      'Декабрь', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
      'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь', 'Январь'
    );
  }
  return $tmp[(int) $number];
}


function e2lstr_periodname ($period) {
  /**/if ('year' == $period) return 'год';
  elseif ('month' == $period) return 'месяц';
  elseif ('week' == $period) return 'неделю';
  elseif ('day' == $period) return 'день';
  else return 'всю историю';
}


function e2lstr_cardinal ($number, $modifier = '', $string_id) {

  $what = $number;
  if ($string_id == 'pt--n-posts') $what = $number .' здан(ие,ия,ий)';
  if ($string_id == 'tt--minutes-ago') $what = $number .' минут(у,ы,)';
  if ($string_id == 'tt--hours-ago') $what = $number .' час(а,ов)';
  if ($string_id == 'gs--n-comments') $what = $number .' комментари(й,я,ев)';
  if ($string_id == 'gs--comments-n-new') $what = $number .' новы(й,х,х)';

  return e2_decline_for_number ($what);
  
}

// ну например, фирма dosya, что-то ещё
// don’t rename this function, it’s listed in build.php
/*
function e2lstr_transliterate ($text) {

  $map = array (
    'ье' => 'ye',
    'ё'  => 'yo', 
    'ж'  => 'zh', 
    'ьи' => 'yi',
    'ч'  => 'ch', 
    'ш'  => 'sh', 
    'щ'  => 'sch', 
    'ъ'  => '', 
    'ый'  => 'yi', 
    'ь'  => '', 
    'ю'  => 'yu', 
    'я'  => 'ya', 
    'ЬЕ' => 'YE',
    'Ье' => 'Ye',
    'Ё'  => 'Yo', 
    'Ж'  => 'Zh', 
    'ЬИ' => 'YI',
    'Ьи' => 'Yi',
    'Ч'  => 'Ch', 
    'Ш'  => 'Sh', 
    'Щ'  => 'Sch', 
    'Ъ'  => '', 
    'ЫЙ'  => 'YI', 
    'Ый'  => 'Yi', 
    'Ь'  => '', 
    'Ю'  => 'Yu', 
    'Я'  => 'Ya', 
  );
  
  $ru = 'абвгдезийклмнопрстуфхцыэАБВГДЕЗИЙКЛМНОПРСТУФХЦЫЭ';
  $en = 'abvgdeziyklmnoprstufhcyeABVGDEZIYKLMNOPRSTUFHCYE';
  
  for ($i = 0; $i < mb_strlen ($ru); ++ $i) {
    $map[mb_substr ($ru, $i, 1)] = mb_substr ($en, $i, 1); // usafe
  }

  $text = strtr ($text, $map); // usafe

  return $text;

}
*/

function e2lstr_translit_table () {

  return array (
    'а б в г д е ё  ж  з и й к л м н о п р с т у ф х ц ч  ш  щ   ый Ый ы ье Ье ьи Ьи э ю  я ',
    'a b v g d e yo zh z i y k l m n o p r s t u f h c ch sh sch y  y  y ye Ye yi Yi e yu ya',
    'А Б В Г Д Е Ё  Ж  З И Й К Л М Н О П Р С Т У Ф Х Ц Ч  Ш  Щ   ЫЙ ыЙ Ы ЬЕ ьЕ ЬИ ьИ Э Ю  Я ',
    'A B V G D E Yo Zh Z I Y K L M N O P R S T U F H C Ch Sh Sch Y  Y  Y YE yE YI yI E Yu Ya',
  );

}



?>