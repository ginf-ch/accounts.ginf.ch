<?php
global $numberOfSteps;
for ($i = 1; $i <= $numberOfSteps; $i++) {
    $prefix = $i <= 9 ? "0$i" : "$i";
    $postfix = $i;
    echo "
<div id='step_$postfix' class='modal'>
    <div class='modal-background'></div>
    
    <div class='modal-content' >
        <figure class='image'>
            <img class='tutorial-img' src='images/edu/$prefix" . "_jetbrains_account_edu.png' alt='step_" . "$postfix'>
        </figure>
    </div>

    <button class='modal-close is-large' aria-label='close'></button>
</div>";
}
