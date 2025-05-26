<?php 
class Province extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{province}}';
    }

    public function primaryKey()
    {
        return 'pid';
    }

    public function rules()
    {
        return [
            ['province', 'required'],
            ['province', 'length', 'max'=>100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'pid' => 'Province ID',
            'province' => 'Province name',
        ];
    }

    public function relations()
    {
        return [
            'districts' => [self::HAS_MANY, 'District', 'pro_id'],
        ];
    }
}
?>