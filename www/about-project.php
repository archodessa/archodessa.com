 <h1>����������� ������</h1>
        <p style="margin-top:-25px">���������� ������� �������� ���������� ������������� �������� ������ �������� ��������� � �� �������� ���������� ����������&nbsp;��������� � ������� ��������, � ����� ���������� ����� ������������. <!--������� � �������� ����������� ���������� ����������� � ����������� ������ ������.--> </p>

<p style="margin-top:-25px">�� ������� ������ ���� �����. ��� �������� ����� � <a href="http://dvoricus.net/">������</a> �� ���� �� �������� �������, �� � ������ � �����.</p>
        <p style="margin-top:-25px"><a href="all/authors/">������ �������</a>, ��������������� ���������� ������������� ��������� <a href="http://wikipedia.com/">���������</a> � <a href="http://google.com/">����</a>, ������������ ��� <? 
$dirname = "./pictures/thumbs/";
 scan_dir($dirname);
 echo "$count_files"; 
?> ������� �������, ���������� � ������� ������ ������.</p>

<?php 
function scan_dir($dirname)  
  {  
    // ��������� ���������� ������ �����������  
    GLOBAL $count_files, $count_dirs;  
    // ��������� ������� ����������  
    $dir = opendir($dirname);  
    // ������ � ����� ����������  
    while (($file = readdir($dir)) !== false)  
    {  
      // ���� ���� ������������ ��� ����������  
      if($file != "." && $file != "..")  
      {  
        // ���� ����� ���� � ������ - ���������� � �� ������  
        if(is_file($dirname."/".$file))  
        {  
         $count_files++;  
        }  
        // ���� ����� ���� ����������, �������� ����������  
        // ������� scan_dir  

      }  
    }  
    // ��������� ����������  
    closedir($dir);  
  } 
?> 

        <!--<p style="margin-top:-25px">��� ����� �����? ��� ���� � ����. ���� ������� ��� ������ � ������ ��� �������, ������� ����� ��������, � ���� �������� ����������� ����������� � ������������� ���� ������� � �� ������.</p>-->


        <h2>����</h2>
<p style="margin-top:-5px">
��������� �&nbsp;���� �������������� ���������� ����������� ������, ��&nbsp;������ ������, <a href="http://dvoricus.net/">�����</a> �&nbsp;���������, ��&nbsp;�&nbsp;������, ���������� ��&nbsp;��������� ������������� ���������, ������������� ��������� �&nbsp;��������� ���������. </p>

        



        <h2>����������</h2>
        <ul>

<a href="http://www.facebook.com/Architecture.of.Odessa"><img src="user/extras/social/fb.gif"></a>
<span style="margin-left: 10px"><a href="http://vk.com/archodessa"><img src="user/extras/social/vk.gif"></a></span>
<span style="margin-left: 9px"><a href="https://twitter.com/archodessa"><img src="user/extras/social/tw.gif"></a></span>
<span style="margin-left: 8px"><a href="http://pinterest.com/alexlevitsky/architecture-of-odessa/"><img src="user/extras/social/pn.gif"></a></span>
<span style="margin-left: 10px"><a href="http://www.youtube.com/archodessa"><img src="user/extras/social/yt.gif"></a></span>
<span style="margin: 0 0 0 10px"><a href="http://instagram.com/archodessa" class="ig-b- ig-b-16"><img src="//badges.instagram.com/static/images/ig-badge-16.png" alt="Instagram" /></a></span>

		</ul>



        <p>
<a href="all/thanks/">�������������</a><br>
<a href="all/job/">��������</a>
		</p>

      
        <p>
          �������, ����, �����������, �������������� � 
          <a title="alex@archodessa.com" href="mailto:alex@archodessa.com">alex@archodessa.com</a><br>
<span style="margin-left: -8px">+380 63 146-0000</span>
        </p>
      </div>
      <? include ('znak-umnogeniya.php'); ?>