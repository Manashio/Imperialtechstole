
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
   // config.toolbar_Large = [['Bold', 'Italic','Image','/','PasteText','SpellCheck'],['Styles','Format','Font','FontSize'],['Table'],['SpellCheck']];
    //config.toolbar = config.toolbar_Large;
      config.extraPlugins = 'hindiFont';
      config.toolbar = [
 [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] ,
 [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] ,
	[ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] ,
	[ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
        'HiddenField' ] ,
	'/',
	[ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] ,
 [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] ,
 [ 'Link','Unlink','Anchor' ] ,
 [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] ,
	'/',
 [ 'Styles','Format','Font','FontSize' ] ,
	[ 'TextColor','BGColor' ] ,
[ 'Maximize', 'ShowBlocks','-','About' ] ,
 [ 'HindiFont' ]
];
         config.enterMode='';

    config.enterMode =CKEDITOR.ENTER_DIV;

    //config.enterMode = CKEDITOR.ENTER_P;
    //config.shiftEnterMode = CKEDITOR.ENTER_P;

   // config.extraPlugins = 'fmath_formula';
   // config.extraPlugins = (config.extraPlugins.length == 0 ? '' : ',') + 'ckeditor_wiris';
//    config.protectedSource.push(/<\?[\s\S]*?\?>/g); /* Protect PHP Code from being stripped when moving to source mode */
//    config.image_previewText = 'This is dummy text to help you view how the image will be aligned.';
//   config.filebrowserImageUploadUrl = '';
  config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';






};
