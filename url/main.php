 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<?php 

	if(isset($main))
	{
		foreach($main as $value)
		{
	?>

	
                 <div class="post-preview">
                    <a href="#">
                        <h2 class="?page=full&&id=<?=$value['id']?>">
                            <?=$value['title']?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?=$value['m_desc']?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Nightingale</a> on September 11, 2001</p>
                </div>
                <hr>
                
              






<?php

	}}
	else
	{
		echo "DB is empty";
	}?>
  <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">All Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>




 