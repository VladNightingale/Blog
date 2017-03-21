<style>
    li {
        list-style-type: none;
    }
</style>
   <div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <ul>
                <?php 

                        if(isset($all))
                        {
                            foreach($all as $value)
                            {
                        ?>
                    <a href="?page=full&&id=<?=$value['id']?>">
                        <li>
                            <h2><?=$value['title']?></h2></li><br><hr>
                    </a>
                    <?php

                            }}
                            else
                            {
                                echo "DB is empty";
                            }?>
            </ul>
        </div>
    </div>
</div>
