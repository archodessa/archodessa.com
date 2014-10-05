 <h1>Архитектура Одессы</h1>
        <p style="margin-top:-25px">Уникальный каталог наиболее интересных архитектурных построек Одессы создаётся старанием и на средства фотографов Александра&nbsp;Левицкого и Дмитрия Шаматажи, а также меценатами семьи Голобородько. <!--История и описание официальных памятников архитектуры и исторически ценных зданий.--> </p>

<p style="margin-top:-25px">Мы обязаны многим этим домам. Без одесских домов и <a href="http://dvoricus.net/">дворов</a> не было бы одесских историй, да и Одессы в общем.</p>
        <p style="margin-top:-25px"><a href="all/authors/">Авторы проекта</a>, дипломированные победители международных конкурсов <a href="http://wikipedia.com/">Википедии</a> и <a href="http://google.com/">Гугл</a>, опубликовали уже <? 
$dirname = "./pictures/thumbs/";
 scan_dir($dirname);
 echo "$count_files"; 
?> снимков фасадов, интерьеров и деталей зданий Одессы.</p>

<?php 
function scan_dir($dirname)  
  {  
    // Объявляем переменные замены глобальными  
    GLOBAL $count_files, $count_dirs;  
    // Открываем текущую директорию  
    $dir = opendir($dirname);  
    // Читаем в цикле директорию  
    while (($file = readdir($dir)) !== false)  
    {  
      // Если файл обрабатываем его содержимое  
      if($file != "." && $file != "..")  
      {  
        // Если имеем дело с файлом - производим в нём замену  
        if(is_file($dirname."/".$file))  
        {  
         $count_files++;  
        }  
        // Если перед нами директория, вызываем рекурсивно  
        // функцию scan_dir  

      }  
    }  
    // Закрываем директорию  
    closedir($dir);  
  } 
?> 

        <!--<p style="margin-top:-25px">Что такое город? Это дома и люди. Люди создают дух города и творят его историю, которую часто забывают, а дома являются безмолвными свидетелями и соучастниками этой истории и всё помнят.</p>-->


        <h2>Цель</h2>
<p style="margin-top:-5px">
Сохранить в&nbsp;виде фотоматериалов уникальную архитектуру Одессы, не&nbsp;только фасады, <a href="http://dvoricus.net/">дворы</a> и&nbsp;интерьеры, но&nbsp;и&nbsp;детали, сопроводив их&nbsp;описанием архитектурных элементов, историческими заметками и&nbsp;одесскими легендами. </p>

        



        <h2>Сообщества</h2>
        <ul>

<a href="http://www.facebook.com/Architecture.of.Odessa"><img src="user/extras/social/fb.gif"></a>
<span style="margin-left: 10px"><a href="http://vk.com/archodessa"><img src="user/extras/social/vk.gif"></a></span>
<span style="margin-left: 9px"><a href="https://twitter.com/archodessa"><img src="user/extras/social/tw.gif"></a></span>
<span style="margin-left: 8px"><a href="http://pinterest.com/alexlevitsky/architecture-of-odessa/"><img src="user/extras/social/pn.gif"></a></span>
<span style="margin-left: 10px"><a href="http://www.youtube.com/archodessa"><img src="user/extras/social/yt.gif"></a></span>
<span style="margin: 0 0 0 10px"><a href="http://instagram.com/archodessa" class="ig-b- ig-b-16"><img src="//badges.instagram.com/static/images/ig-badge-16.png" alt="Instagram" /></a></span>

		</ul>



        <p>
<a href="all/thanks/">Благодарность</a><br>
<a href="all/job/">Вакансии</a>
		</p>

      
        <p>
          Вопросы, идеи, предложения, сотрудничество — 
          <a title="alex@archodessa.com" href="mailto:alex@archodessa.com">alex@archodessa.com</a><br>
<span style="margin-left: -8px">+380 63 146-0000</span>
        </p>
      </div>
      <? include ('znak-umnogeniya.php'); ?>