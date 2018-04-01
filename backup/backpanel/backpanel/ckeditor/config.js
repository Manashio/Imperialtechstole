CKEDITOR.editorConfig = function( config ){

    config.language = 'en';
    config.uiColor = '#F1F1F1';
    config.resize_enabled = true;
    config.removePlugins = 'elementspath';
        config.extraPlugins = 'ckeditor_wiris,hindiFont'; //hindiFont add by Gaurav on-25/8
	config.toolbar_Large = [[ 'HindiFont' ],['Source','Bold', 'Italic','Image','/','PasteText','SpellCheck','ckeditor_wiris_formulaEditor','ckeditor_wiris_CAS'],['Table'],['SpellCheck']];
    config.toolbar = config.toolbar_Large;
	config.enterMode = CKEDITOR.ENTER_P;
    config.shiftEnterMode = CKEDITOR.ENTER_P;
    //config.extraPlugins = 'fmath_formula'; //useless commented Gaurav on-25/8
    //config.extraPlugins = (config.extraPlugins.length == 0 ? '' : ',') + 'ckeditor_wiris';//extra comment by Gaurav on-25/8
   config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';


};
