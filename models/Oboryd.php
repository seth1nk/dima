<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oboryd".
 *
 * @property int $id
 * @property string|null $название
 * @property string|null $IP_адрес
 * @property string|null $mac_адрес
 * @property string|null $Местоположение
 * @property string|null $Дата_установки
 * @property string|null $Время_установки
 */
class Oboryd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oboryd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Дата_установки', 'Время_установки'], 'safe'],
            [['название', 'IP_адрес', 'mac_адрес', 'Местоположение'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'название' => 'Название',
            'IP_адрес' => 'Ip Адрес',
            'mac_адрес' => 'Mac Адрес',
            'Местоположение' => 'Местоположение',
            'Дата_установки' => 'Дата Установки',
            'Время_установки' => 'Время Установки',
        ];
    }
}
