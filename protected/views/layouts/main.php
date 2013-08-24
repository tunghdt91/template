<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
        <?php Yii::app()->bootstrap->register();?>
                <!-- Standard CSS Includes -->
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.pagewalkthrough.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>    

        <!-- Standard Script Includes -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.pagewalkthrough-1.1.0.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/page.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <div id="container">
	<div id="header">
		<div class="wrapper clearfix">
			<div class="logo">
				<a href="#">Tung's Php Template</a>
			</div>
			<div class="main-menu">
				<ul>
					<li><a href="javascript:;" id="open-walkthrough">Walkthrough</a></li>
					<li><a href="javascript:;" id="open-callbacks">Callbacks</a></li>
					<li><a href="javascript:;" id="open-methods">Methods</a></li>
					<li class="last"><a href="javascript:;" id="open-extra">Extra</a></li>
				</ul>
			</div>
			<div class="search-box">
				<form>
					<div class="form-element clearfix">
						<div class="inputText search">
							<input type="text" placeholder="Search..." />
						</div>				
						<input type="submit" value="search" class="btnSearch"/>
					</div>
				</form>				
			</div>
		</div>
	</div><!-- header -->
        
        <?php echo $content;?>
        
	
        <div class="clear"></div>
        <div class="divider-dotted"></div>
        <div class="row">
                <ul class="social">
                        <li id="email-us">
                                <h3>Email us</h3>
                                <span><a href="javascript:;">tunghdt91@gmail.com</a></span>
                        </li>
                        <li>
                                <h3>Tweet us</h3>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_twitter.gif"/><span><a href='#'>Twitter</a></span>
                        </li>
                        <li>
                                <h3>Facebook</h3>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_facebook.gif"/><span><a href='#'>Facebook</a></span>
                        </li>
                </ul>
            </div>
        <div id="footer">
            <div class="footerWrapper">
                <div class="officeAddress">
                    <div class="item" id="indonesia">
                        <h5>
                            Indonesia:
                            <span>
                                <a target="_blank" href="javascript:;">google map</a>
                            </span>
                        </h5>
                        A Nerd Street 06/12pm
                        <span class="spPhone">Phone : (01) 1234 5678</span> 
                        <span class="spPhone">Fax : (01) 1234 5678</span>

                    </div>

                    <div class="item" id="singapore">
                        <h5>
                            Singapore:
                            <span>
                                <a target="_blank" href="javascript:;">google map</a>
                            </span>
                        </h5>
                        A Geek Street 06/12 pm
                        <span class="spPhone">Phone : (02) 1234 5678</span> 
                        <span class="spPhone">Fax : (02) 1234 5678</span>
                    </div>

                    <div class="item" id="australia">
                        <h5>
                            Australia
                            <span>
                                <a target="_blank" href="javascript:;">google map</a>
                            </span>
                        </h5>
                        Lorem ipsum Street 123x
                        <span class="spPhone">Phone : (03) 1234 5678</span> 
                        <span class="spPhone">Fax : (03) 1234 5678</span>
                    </div>

                </div>
                <div class="divider-dotted"></div>
                <div class="footer-menu">
                    <div id="privacyContainer">
                        <ul>

                            <li>
                                <a href="#" id="privacy">Privacy Policy</a></li>

                            <li>
                                <a href="#" id="sitemap">Site Map</a></li>
                        </ul>
                        <span class="copyRight">&copy;Copyright 2013 jQuery Page Walkthrough. All Rights Reserved.</span>
                    </div>

                </div>
            </div>
        </div><!-- footer -->	
</div><!-- container -->
</body>
</html>
