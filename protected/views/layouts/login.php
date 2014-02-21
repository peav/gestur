<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" />
        

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div class="container-fluid">            
            <div class="content">
                <div class="logo">
                    <img src="<?php echo Yii::app()->request->baseUrl.'/images/login/logo3.jpg'?> " />
                </div>
                <?php echo $content ?>
            </div>
        </div>
    </body>

</html>
