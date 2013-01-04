<div  class="content" style="margin-top:15px;">
<hr/>

	<h5 style="margin:2px;font-size:13pt;"><?php echo Kohana::lang('fileupload.files');?>
		<br/>
		<span style="font-size:10px;"><?php echo Kohana::lang('fileupload.page');?>
			</span>
	</h5>
	<ul style="padding-left:20px;">
		<?php
			foreach ($files as $file) 
			{
				print "<li id=\"file_". $file->id ."\"  >";
				$prefix = url::base().Kohana::config('upload.relative_directory');
				$file_name = $file->file_link;
				print '<a href="'.$prefix.'/'.$file_name.'">'.$file->file_title.'</a>';
				
				//print '<script type="text/javascript" src="http://video.112.ua/player/jwplayer.js"></script><div id="video">This text will be replaced</div><script type="text/javascript">jwplayer("video").setup({"flashplayer": "http://video.112.ua/player/player.swf", "file": "test.mp4","width": "320","height": "200",});</script>';
				print "</li>";
				print "12e3343twretwrfgtrhdtghgfhdghgfhfdhf";
			}
		?>
	</ul>
	

</div>