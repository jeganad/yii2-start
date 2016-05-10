<?php
use yii\helpers\Html;
?>
<!-- START Language Selector -->
<div class="header-language"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
    <ul>
        <li>
            <a href="#" class="language-closed">
                <span aria-hidden="true" class="icon icon-wireframe-globe"></span>
                <span class="main-text"><?= $current->name;?></span>
            </a>
            <a href="#" class="language-opened">
                <span aria-hidden="true" class="icon icon-cross"></span>
                <span class="main-text"><?= $current->name;?></span>
            </a>
            <ul>
                <?php
                    foreach ($langs as $lang){
                        echo '<li class="language-list-item">';
                        echo '<div class="language-block">';
                        echo '<a href="'.'/'.$lang->url.Yii::$app->getRequest()->getLangUrl().'">';
                        echo '<span class="language-flag">';
                        echo '<img src="/images/optional/flags/'.$lang->url.'.png" width="32" height="32" alt="english-flag" />';
                        echo '</span>';
                        echo '<span class="language-name">';
                        echo $lang->name;
                        echo '</span>';
                        echo '</a>';
                        echo '</div>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </li>
    </ul>
</div>
<!-- END Language Selector -->
