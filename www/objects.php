<!--<pre>-->
<?php //print_r($_GET); ?>
<!--</pre>-->


<style type="text/css">
    .b-panorama {
        max-width: 2600px;
        display: block;
        width: 100%;
        height: 135px;
        background: white url('/pictures/unesco.gif') center top no-repeat;
        text-align: center;
        font-size: 30px;
    }
</style>
<div style="margin: 22px 10% 0 22px;">
    <a href="/all/donate/" class="panorama b-panorama">
       <!--<p style="text-shadow: 0 0 27px #24242b; padding-top: 458px; font-size: 180%; ">Пожертвовать в проект «Архитектура Одессы»</p>
        <span class="mini-text" style="background: #b38264">С вашей помощью уникальный каталог всех исторических построек Одессы станет прецедентом для вхождения города в список объектов Всемирного наследия ЮНЕСКО.</span>-->
    </a>
</div>

<?php
    echo getObjects("0,300");
?>
