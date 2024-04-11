<?php

namespace app\models;

/**
 * models module definition class
 */
class Pros extends \yii\db\ActiveRecord
	{
	  public static function tableName()
	  {
	    return 'product';
	  }
	  
	  public function rules()
	  {
	    return [
		  [['title','description','category','subcategory','name'], 'required'],
		];
	  }

      public function attributeLabels(){
        return [
          'id' => 'ID',
          'title' => 'title',
          'description' => 'description',
          'category' => 'category',
          'subcategory' => 'subcategory',
		  'name' => 'name',
          ];
      }
	}

	