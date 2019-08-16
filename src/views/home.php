<?php
/**
 *
 * @var View $this
 * @var QuizModel[]
 * @var $quizzes []
 */

use Quiz\ActiveUser;
use Quiz\Models\QuizModel;
use Quiz\View;

if (ActiveUser::isLoggedIn()): ?>
    Hello <?= ActiveUser::getLoggedInUser()->name; ?>
    <div id="quiz-container">

    </div>
<?php else: ?>
    Not logged in
<?php endif; ?>

<?php if (ActiveUser::isLoggedIn()) {
    $js = <<<JS
function renderList(items) {
        let container = document.querySelector('#quiz-container');
        
        items.forEach(function(item) {
            let el = document.createElement('div');
            el.classList.add('col-md-4');
            el.innerHTML = item.title;
            container.appendChild(el);
        });
    }
    let xhr = new XMLHttpRequest();
    
    xhr.onload = function() {
      let response = xhr.response;
      let json = JSON.parse(response);
      renderList(json);
    };
    
    xhr.open('GET', '/quizzes/all');
    xhr.send();
JS;
    $this->registerJs($js);
};


?>


