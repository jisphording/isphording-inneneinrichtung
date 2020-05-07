<section class="insert-readmore">
<!-- This Insert can be used as a hook/link to another page which contains more information on the topic and/or to break up the page flow a little bit -->
    <div class="insert-readmore__content">
        <div class="column01">
            <p>Lesen Sie mehr <em>in diesem Artikel:</em>
        </div>
        <div class="column02"> 
            <?= $page -> InsertReadmore() -> kirbytext() ?>
        </div>
   </div>
   
   <canvas id="insert-readmore__grain" class="insert-readmore__grain"><!-- only background animation via css --></canvas>
</section>