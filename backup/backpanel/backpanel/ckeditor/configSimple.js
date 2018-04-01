
CKEDITOR.editorConfig = function( config ){
	
	
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.language = 'en';
    config.uiColor = '#F1F1F1';
    config.resize_enabled = true;
    config.removePlugins = 'elementspath';

	
    //##These fields are added from the ProProf config file
    //    config.atd_theme = 'tinymce';
    config.extraPlugins='hindiFont';
    config.toolbar_Large = [['HindiFont'],['Bold', 'Italic','Image','/','PasteText','SpellCheck'],['Styles','Format','Font','FontSize'],['Table'],['SpellCheck']];
    config.toolbar = config.toolbar_Large;
	// config.enterMode='';

    config.enterMode = CKEDITOR.ENTER_DIV;
    //config.enterMode = CKEDITOR.ENTER_P;
    //config.shiftEnterMode = CKEDITOR.ENTER_P;

   // config.extraPlugins = 'fmath_formula';
   // config.extraPlugins = (config.extraPlugins.length == 0 ? '' : ',') + 'ckeditor_wiris';
//    config.protectedSource.push(/<\?[\s\S]*?\?>/g); /* Protect PHP Code from being stripped when moving to source mode */
//    config.image_previewText = 'This is dummy text to help you view how the image will be aligned.';
//    config.filebrowserImageUploadUrl = '';
  config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';






};
