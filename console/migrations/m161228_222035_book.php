<?php

use yii\db\Migration;

class m161228_222035_book extends Migration
{
    public function up()
    {
        $this->createTable('book', [
            'id' => 'INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT',
            'bbk' => 'VARCHAR(1000) COMMENT "Шифр ББК"',
            'udk' => 'VARCHAR(1000) COMMENT "Шифр УДК"',
            'author_mark' => 'VARCHAR(1000) COMMENT "Авторский знак"',
            'entry_heading' => 'VARCHAR(1000) COMMENT "Заголовок описания"',
            'main_title' => 'VARCHAR(1000) COMMENT "Основное заглавие"',
            'title_title' => 'VARCHAR(1000) COMMENT "Сведения, относящиеся к названию"',
            'author_info' => 'VARCHAR(1000) COMMENT "Сведения об авторстве"',
            'edition' => 'VARCHAR(1000) COMMENT "Издание (повторность)"',
            'publisher_location' => 'VARCHAR(1000) COMMENT "место издания"',
            'publisher_name' => 'VARCHAR(1000) COMMENT "Издательство"',
            'publication_year' => 'VARCHAR(1000) COMMENT "Год издания"',
            'page_number' => 'VARCHAR(1000) COMMENT "Количество листов"',
            'illustration_info' => 'VARCHAR(1000) COMMENT "Сведения об иллюстрациях"',
            'attachment_info' => 'VARCHAR(1000) COMMENT "Сведения о сопроводительном материале"',
            'series_info' => 'VARCHAR(1000) COMMENT "Область серии"',
            'isbn' => 'VARCHAR(1000) COMMENT "ИСБН"',
            'binding' => 'VARCHAR(1000) COMMENT "Переплет"',
            'price' => 'VARCHAR(1000) COMMENT "Цена"',
            'circulation' => 'VARCHAR(1000) COMMENT "Тираж"',
        ]);
    }

    public function down()
    {
        echo "m161228_222035_book cannot be reverted.\n";

        return false;
    }
}
