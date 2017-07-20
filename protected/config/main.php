<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Order Manager - Track Ur Orders',
    // preloading 'log' component
    'preload' => array(
        'less',
        'bootstrap',
        'log',
    ),
	'homeUrl'=>array('user/profile'),

	// 'defaultController' => 'site/login',
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
         'application.modules.products.models.*',
         'application.modules.customers.models.*',
		 'application.modules.user.models.*',
                'application.modules.user.components.*',
                'application.modules.rights.*',
                'application.modules.rights.components.*',
    ),
    'modules' => array(
	'orders',
	'rights'=>array(
                    'install'=>false,
                ),
           'message' => array(
                        'userModel' => 'User',
                        'getNameMethod' => 'name',
                        'getSuggestMethod' => 'getSuggest',
                        'viewPath' => '/message/default',
                ),
                
                'user'=>array(
                    # encrypting method (php hash function)
                    'hash' => 'md5',
         
                    # send activation email
                    'sendActivationMail' => true,
         
                    # allow access for non-activated users
                    'loginNotActiv' => false,
         
                    # activate user on registration (only sendActivationMail = false)
                    'activeAfterRegister' => false,
         
                    # automatically login from registration
                    'autoLogin' => true,
         
                    # registration path
                    'registrationUrl' => array('/user/registration'),
         
                    # recovery password path
                    'recoveryUrl' => array('/user/recovery'),
         
                    # login form path
                    'loginUrl' => array('/user/login'),
         
                    # page after login
                    'returnUrl' => array('/user/profile'),
         
                    # page after logout
                    'returnLogoutUrl' => array('/user/login'),
                    
                ),
        'customers',
        'products',
        'employees',
// uncomment the following to enable the Gii tool
        /*
          'gii'=>array(
          'class'=>'system.gii.GiiModule',
          'password'=>'Enter Your Password Here',
          // If removed, Gii defaults to localhost only. Edit carefully to taste.
          'ipFilters'=>array('127.0.0.1','::1'),
          ),
         */
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'ppp',
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
    // application components
    'components' => array(
        'less' => array(
            'class' => 'ext.less.components.LessCompiler',
            'forceCompile' => false, // indicates whether to force compiling
            'paths' => array(
                'less/style.less' => 'css/style.css',
            ),
        ),
     'user'=>array(
	            'class'=>'RWebUser',
                // enable cookie-based authentication
                    'allowAutoLogin'=>true,
                    'loginUrl'=>array('/user/login'),
		),

	'authManager'=>array(
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'authitem',
			'itemChildTable'=>'authitemchild',
			'assignmentTable'=>'authassignment',
			'rightsTable'=>'rights',
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
            'coreCss' => false,
            'yiiCss' => true,
            'responsiveCss' => true,
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
       /* 'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),*/
        // uncomment the following to use a MySQL database
        
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=hrdotnet_odm',
          'emulatePrepare' => true,
          'username' => 'hrdotnet_odm',
          'password' => 'myjoy=123',
          'charset' => 'utf8',
		  	'tablePrefix' => '',
          ),
         
        'errorHandler' => array(
// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ), 
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
// this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);