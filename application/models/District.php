<?php 

class District extends CActiveRecord {
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return '{{district}}';
    }
    public function rules()
    {
        return [
            ['district, pro_id', 'required'],
            ['pro_id', 'numerical', 'integerOnly' => true],
            ['district', 'length', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'dt_id' => 'District ID',
            'district' => 'District name',
            'pro_id' => 'Province ID' 
        ];
    }
    public function relations()
    {
        return [
            'province' => [self::BELONGS_TO,'Province','pid']
        ];
    }
}
?>