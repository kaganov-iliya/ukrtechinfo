<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounting_books".
 *
 * @property string $id
 * @property string $book_title
 * @property string $book_author
 * @property string $book_article
 * @property string $book_photo
 * @property string $publisher_title
 * @property string $publisher_phone
 * @property string $publisher_address
 * @property string $published_date
 */
class AccountingBooks extends \yii\db\ActiveRecord
{
    public $photo;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounting_books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo'], 'file'],
            [['book_title', 'book_author', 'book_article', 'publisher_title', 'publisher_phone', 'publisher_address', 'published_date'], 'required'],
            [['published_date'], 'safe'],
            [['book_title', 'publisher_address'], 'string', 'max' => 255],
            [['book_author', 'publisher_title'], 'string', 'max' => 100],
            [['book_photo'], 'image'],
            [['book_article', 'publisher_phone'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_title' => 'Название книги',
            'book_author' => 'автор книги',
            'book_article' => 'артикул книги',
            'book_photo' => 'фото книги',
            'publisher_title' => 'название издательства',
            'publisher_phone' => 'телефон издательства',
            'publisher_address' => 'адрес издательства',
            'published_date' => 'дата издания',
        ];
    }
}
