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
                    <a href="?page=full&&id=<?=$value['id']?>">
                        <h1>
                            <?=$value['title']?>
                        </h1>
                        <h3 class="post-subtitle">
                            <?=$value['m_desc']?>
                        </h3> </a>
                    <p class="post-meta">Posted by <a href="https://vk.com/vladnightingale">Nightingale</a> on <?=$value['date']?></p>
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
                        <li class="next"> <a href="/?page=all">All Posts &rarr;</a> </li>
                    </ul>
        </div>
    </div>
</div>
<hr>