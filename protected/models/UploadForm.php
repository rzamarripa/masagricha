<?php
class UploadPhoto extends CFormModel {
    public $foto;
 
    public function rules() {
        return array(
			array('foto', 'required'),
            array('foto', 'file', 'types' => 'jpg, jpeg, png, gif'),
        );
    }
}
?>