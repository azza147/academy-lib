<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $bbk
 * @property string $udk
 * @property string $author_mark
 * @property string $entry_heading
 * @property string $main_title
 * @property string $title_title
 * @property string $author_info
 * @property string $edition
 * @property string $publisher_location
 * @property string $publisher_name
 * @property string $publication_year
 * @property string $page_number
 * @property string $illustration_info
 * @property string $attachment_info
 * @property string $series_info
 * @property string $isbn
 * @property string $binding
 * @property string $price
 * @property string $circulation
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bbk', 'udk', 'author_mark', 'entry_heading', 'main_title', 'title_title', 'author_info', 'edition', 'publisher_location', 'publisher_name', 'publication_year', 'page_number', 'illustration_info', 'attachment_info', 'series_info', 'isbn', 'binding', 'price', 'circulation'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bbk' => 'Шифр ББК',
            'udk' => 'Шифр УДК',
            'author_mark' => 'Авторский знак',
            'entry_heading' => 'Заголовок описания',
            'main_title' => 'Основное заглавие',
            'title_title' => 'Сведения, относящиеся к названию',
            'author_info' => 'Сведения об авторстве',
            'edition' => 'Издание (повторность)',
            'publisher_location' => 'Место издания',
            'publisher_name' => 'Издательство',
            'publication_year' => 'Год издания',
            'page_number' => 'Количество листов',
            'illustration_info' => 'Сведения об иллюстрациях',
            'attachment_info' => 'Сведения о сопроводительном материале',
            'series_info' => 'Область серии',
            'isbn' => 'ИСБН',
            'binding' => 'Переплет',
            'price' => 'Цена',
            'circulation' => 'Тираж',
        ];
    }

    /**
     * @inheritdoc
     * @return BookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BookQuery(get_called_class());
    }
}
