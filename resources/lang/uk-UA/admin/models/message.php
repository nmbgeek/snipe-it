<?php

return array(

    'deleted' => 'Видалена модель медіафайла',
    'does_not_exist' => 'Модель не існує.',
    'no_association' => 'УВАГА! Модель активу для цього елемента невірна або відсутня!',
    'no_association_fix' => 'Це може порушити речі дивним і жахливим способом. Відредагуйте цей актив щоб призначити йому модель.',
    'assoc_users'	 => 'Ця модель пов\'язана в даний час з одним або більше активами і не може бути видалена. Будь ласка, видаліть активи, а потім спробуйте видалити їх. ',
    'invalid_category_type' => 'Ця категорія має бути категорією активів.',

    'create' => array(
        'error'   => 'Модель не було створено, спробуйте ще раз.',
        'success' => 'Модель успішно створено.',
        'duplicate_set' => 'Модель активу з такою назвою, виробника та номер моделі вже існує.',
    ),

    'update' => array(
        'error'   => 'Модель не була оновлена, спробуйте ще раз',
        'success' => 'Модель успішно оновлено.',
    ),

    'delete' => array(
        'confirm'   => 'Ви впевнені, що хочете видалити цю модель?',
        'error'   => 'Виникла проблема видалення моделі. Будь ласка, спробуйте ще раз.',
        'success' => 'Модель успішно видалено.'
    ),

    'restore' => array(
        'error'   		=> 'Модель не було відновлено, будь ласка, спробуйте ще раз',
        'success' 		=> 'Модель успішно відновлена.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Немає змінених полів, тому нічого не було оновлено.',
        'success' 		=> 'Модель успішно оновлено. |:model_count моделей успішно оновлено.',
        'warn'          => 'Ви збираєтеся оновити властивості наступної моделі:|Ви збираєтеся редагувати властивості наступних :model_count моделей:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'Жодного зразка не було вибрано, тому нічого не було вилучено.',
        'success' 		    => 'Модель видалена!|:success_count моделей видалено!',
        'success_partial' 	=> ':success_count моделей було видалено, проте :fail_count не може бути видалено, оскільки вони все ще мають активи, пов\'язані з ними.'
    ),

);
