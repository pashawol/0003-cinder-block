
<div class="d-none">
  <?php
  	if(!empty($_POST)){
  			ini_set( 'display_errors', 1 );
  			require __DIR__ . '/vendor/autoload.php';
  			// $to='trifectahealthnyc@gmail.com';
  			$mail = new PHPMailer(true);
  			$mail->IsMail();
  			$mail->IsHTML(true);
  			$mail->Priority = '1';
  			$mail->Encoding = 'base64';
  			$mail->CharSet = 'utf-8';
  
  	///от кого письмо
  			$mail->setFrom('info@info.com');
  
  			$mail->addAddress('wol1414@gmail.com');
  	//  $mail->addAddress('spike.mgn@gmail.com');
  			// $mail->addAddress('horenkova369@gmail.com');
  	// $mail->addAddress('stab@inbox.support');
  
  
  
  	//Субъект
  			$mail->Subject = 'Заявка с сайта';
  
  			$time = date('d.m.Y в H:i');
  			$html = '
  
  	<table style="width: 100%;">';
  			if (!empty($_POST['order'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;">Вид формы:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['order'] . '</b></td></tr>';
  			}
  
  
  
  			if (!empty($_POST['name'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">Имя:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['name'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['tel'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Телефон:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['tel'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['time'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Время для звонка:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['time'] . '</b></td></tr>';
  			}
  
  
  			if (!empty($_POST['choose-type'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Тип шлакоблок:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['choose-type'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['result'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Объем:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['result'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['cost'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Стоимость:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['cost'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['length'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Длина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['length'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['height'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Высота стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['height'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['width'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Ширина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['width'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['thickness'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Толщина стен:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['thickness'] . '</b></td></tr>';
  			}
  
  			if (!empty($_POST['windows'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Количество окон:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['windows'] . '</b></td></tr>';
  			}
  
  
  			if (!empty($_POST['doors'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> Количество дверей:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['doors'] . '</b></td>';
  			}
  
  			if (!empty($_POST['utm_source'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_source:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_source'] . '</b></td>';
  			}
  
  			if (!empty($_POST['utm_term'])) {
  					$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> utm_term:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_POST['utm_term'] . '</b></td>';
  			}
  			// if (!empty($_POST['tech'])) {
  			//     $html .= ' <tr style="background-color: #f8f8f8;">  <td style="padding: 10px; border: #e9e9e9 1px solid;"> Техника:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . implode(", ",$_POST['tech']) . '</b></td></tr>';
  			// }
  
  
  			$html .= ' <tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;">  Время отправки:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $time . '</b></td>
  				<tr style="background-color: #f8f8f8;"> <td style="padding: 10px; border: #e9e9e9 1px solid;"> IP:</td>   <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $_SERVER['REMOTE_ADDR'] . '</b></td> 
  	</table>
  	';
  			$mail->Body = $html;
  
  			$uploaddir = __DIR__ . '/upload/';
  
  			if ($_FILES['file']['tmp_name']) {
  					$mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
  			}
  
  	// if ($_FILES['file2']['tmp_name']) {
  	//  $mail->addAttachment($_FILES['file2']['tmp_name'],$_FILES['file2']['name']);
  	// }
  
  	//send the message, check for errors
  			if (!$mail->send()) {
  	//        echo "Mailer Error: " . $mail->ErrorInfo;
  			} else {
  	//        echo "Message sent!";
  			}
  			if (isset($uploadfile))unlink($uploadfile);
  			if (isset($uploadfile2))unlink($uploadfile2);
  	}
  	?>
</div><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Спасибо</title>
    <meta name="description" content="о чем страница">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" type="image/ico" href="img/favicon/favicon.ico">
    <link rel="image_src" href="http://genrif.ru/assets/i/soc-logo.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="content">
    <meta property="og:title" content="content">
    <meta property="og:description" content="content">
    <meta property="og:url" content="content">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="path/to/image.jpg">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <!-- Custom Browsers Color-->
    <meta name="theme-color" content="#1c8dcc">
    <link rel="stylesheet" href="css/main.min.css">
  </head>
  <body class="thanks-page">
    <div class="main-wrapper">
      <!-- start HEADER.header-->
      <header class="header block-with-lazy bg-wrap">
        <!-- start .top-line-->
        <div class="top-line block-with-lazy">
          <div class="container">
            <div class="row">
              <div class="col-xl-auto col-md">
                <div class="row">
                  <div class="top-line__col col-auto">
                    <div class="toggle-menu-mobile"><span></span>
                      <ul>
                        <li><a href="02-categories.html">Каталог</a></li>
                        <li><a href="05-shipping.html">Доставка и оплата</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="top-line__col col-xl-auto col"><a class="top-line__logo" href="/">
                    <div class="d-none d-sm-block">
                      <!-- picture-->
                      <picture> 
                        <source srcset="img/@2x/webp/logo.webp" type="image/webp"/>
                        <!-- /webp images  --><img src="img/@2x/logo.png" alt=""/>
                      </picture>
                      <!-- /picture-->
                    </div><span class="top-line__logo-text">Производство шлакоблока и&nbsp;тротуарной плитки</span></a>
                  </div>
                </div>
              </div>
              <div class="top-line__col col-sm-auto col-6">
                <div class="top-line__text"> 
                  <div class="top-line__icon-wrap">
                    <svg class="icon icon-star ">
                      <use xlink:href="img/svg/sprite.svg#star"></use>
                    </svg>
                  </div>
                  <div>Работаем <br/>с&nbsp;2006 года</div>
                </div>
              </div>
              <div class="top-line__col col-sm-auto col-6">
                <div class="top-line__text">
                  <div class="top-line__icon-wrap">
                    <svg class="icon icon-mark ">
                      <use xlink:href="img/svg/sprite.svg#mark"></use>
                    </svg>
                  </div>
                  <div>г.&nbsp;Магнитогорск,<br/> Вайнера, 2А</div>
                </div>
              </div>
              <div class="top-line__col col-auto">
                <div class="top-line__text top-line__text--tel">
                  <div class="top-line__icon-wrap">
                    <svg class="icon icon-tel ">
                      <use xlink:href="img/svg/sprite.svg#tel"></use>
                    </svg>
                  </div>
                  <div><a class="top-line__tel" href="tel:+7351945-52-03">+7 3519 45-52-03</a>
                    <div class="top-line__time">Звоните с&nbsp;9:00 -&nbsp;18:00
                    </div><a class="top-line__sm-link link-modal d-xl-none" data-src="#modal-call" href="javascript:;" data-order="Заказать звонок в шапке">Перезвоните мне</a>
                  </div>
                </div>
              </div>
              <div class="top-line__col col-auto d-xl-block d-none"><a class="top-line__btn link-modal" data-src="#modal-call" href="javascript:;" data-order="Заказать звонок в шапке">Перезвоните мне</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end .top-line-->
        <div class="container">
          <nav class="breadcrumb h6 justify-content-md-start justify-content-center"><a href="/">Вернуться на сайт</a></nav>
        </div>
      </header>
      <!-- end HEADER.header-->
      <div class="thanks section">
        <div class="container">
          <div class="section-title text-center">
            <?php
            	$name="";
             
            	if(isset($_POST['name'])) {
            		$name= $_POST['name']
            			?> 
            		<h1><?php echo $name; ?>, спасибо, мы&nbsp;приняли вашу заявку!</h1>
            		<?php
            	}
            	else{	?> 
            		<h1>Cпасибо, мы&nbsp;приняли вашу заявку!</h1>
            			<?php
            	}
            
            	if(isset($_POST['formwithtime'])){
            
            	if(!empty($_POST['time'])) {
            	 	?> 
            		<div class="section-title__text">Специалист Зоя перезвонит в&nbsp;указанное время и&nbsp;ответит на&nbsp;Ваши вопросы. Удачного дня! </div>
            		<?php
            	}
            	else{
            			?> 
            			<div class="section-title__text">Специалист Зоя перезвонит в&nbsp;ближайшее время и&nbsp;ответит на&nbsp;Ваши вопросы. Удачного дня! </div>
            			<?php
            	}
             		}
            	if(isset($_POST['formorder'])) {
            			?> 
            		<div class="section-title__text">Специалист Зоя перезвонит в&nbsp;ближайшее время и&nbsp;обсудит с&nbsp;Вами заказ. Удачного дня!
            	</div>
             
            		<?php 
            	}
            		if(isset($_POST['formtask'])) {
            			?> 
            		<div class="section-title__text">Специалист Зоя перезвонит в&nbsp;ближайшее время и&nbsp;обсудит с&nbsp;Вами задачу. Удачного дня!
            	</div>
             
            		<?php 
            	}
            
            	
            	if(isset($_POST['formprice'])) {
            			?> 
            			
            		<div class="section-title__text">Мы&nbsp;уже отправили Вам каталог и&nbsp;прайс на&nbsp;шлакоблок.<br>Специалист Зоя перезвонит вам, чтобы обсудить с&nbsp;Вами объем материала, стоимость и&nbsp;условия поставки. <br>Удачного дня!
            	</div>
            	<div class="thanks__img-wrap">
            	 
            	<picture> 
            		<source srcset="img/@2x/webp/thanks-price.webp" type="image/webp">
            		<!-- /webp images  --><img src="img/@2x/thanks-price.png" alt="">
            	</picture>
            	<!-- /picture-->
            </div>
            		<?php }
            		else{
            			?> 
            		<picture> 
            			<source srcset="img/@2x/webp/thanks-img.webp" type="image/webp">
            			<!-- /webp images  --><img src="img/@2x/thanks-img.png" alt="">
            		</picture>
            
            			<?php
            			}
            				
            ?> 
            
            
          </div>
        </div>
      </div>
      <footer class="footer block-with-lazy">
        <div class="container">
          <div class="row">
            <div class="footer__col col-sm-auto col-xl">
              <div class="footer__text">
                <div class="footer__icon-wrap">
                  <svg class="icon icon-mark ">
                    <use xlink:href="img/svg/sprite.svg#mark"></use>
                  </svg>
                </div>
                <div>г.&nbsp;Магнитогорск,<br/> Вайнера, 2А</div>
              </div>
            </div>
            <div class="footer__col col-sm-auto col-6 d-none d-sm-block col-xl">
              <ul>
                <li><a href="02-categories.html">Каталог</a></li>
                <li><a href="05-shipping.html">Доставка и оплата</a></li>
                <li><a href="06-calculator.html">Калькулятор</a></li>
              </ul>
            </div>
            <div class="footer__col col-sm-auto">
              <div class="footer__text footer__text--tel">
                <div class="footer__icon-wrap">
                  <svg class="icon icon-tel ">
                    <use xlink:href="img/svg/sprite.svg#tel"></use>
                  </svg>
                </div>
                <div><a class="footer__tel" href="tel:+7351945-52-03">+7 3519 45-52-03 </a>
                </div>
              </div><a class="footer__btn link-modal" data-src="#modal-call" href="javascript:;" data-order="Заказать звонок в подвале">Перезвоните мне</a>
            </div>
            <div class="col-xl-4 col-lg-auto col-md order-md-first">
              <div class="row"> 
                <div class="footer__col col-xl-auto col"><a class="footer__logo" href="/">
                  <!-- picture-->
                  <picture class="lazy"> 
                    <source srcset="#" data-srcset="img/@2x/webp/logo.webp" type="image/webp"/>
                    <!-- /webp images  --><img src="#" data-src="img/@2x/logo.png" alt=""/>
                  </picture>
                  <!-- /picture-->
                  <div class="footer__logo-text">Производство шлакоблока и&nbsp;тротуарной плитки
                    <div class="text-secondary">Работаем с 2006 года</div>
                  </div></a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__policy text-md-left text-center"><a class="text-body tdu" href="privacy-policy.pdf" target="_blank">Политика конфиденциальности</a>
          </div>
        </div>
      </footer>
    </div>
    <div class="form-wrap modal-win modal-form" id="modal-call">
      <form action="thanks.php" method="post">
        <input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
        <input class="utm_source" type="hidden" name="utm_source"/>
        <input class="utm_term" type="hidden" name="utm_term"/>
        <div class="row no-gutters">
          <div class="col-6 section-bg d-none d-lg-block" data-bg="img/@2x/modal-1.jpg"></div>
          <div class="col">
            <div class="form-wrap__top-title">Укажите контактные данные 
              <div class="form-wrap__text form-wrap__text--lg">и&nbsp;удобное время для звонка
              </div>
            </div>
            <div class="form-wrap__text form-wrap__text--sm">Специалист компании &laquo;АБлок&raquo; Зоя позвонит  вам прямо сейчас или в&nbsp;другое рабочее время: мы&nbsp;работаем ежедневно с&nbsp;09:00 до&nbsp;20:00
            </div>
            <input type="hidden" name="formwithtime" value="formwithtime"/>
            <div class="form-wrap__input-wrap">
              <label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input" type="text" placeholder="Иван" name="name" required="required"/>
              </label>
            </div>
            <!-- +e.input-wrap-->
            <div class="form-wrap__input-wrap">
              <label><span class="form-wrap__title">Введите Ваш номер телефона для связи</span><input class="form-wrap__input" type="tel" placeholder="Ваш номер телефона" name="tel" required="required"/>
              </label>
            </div>
            <!-- +e.input-wrap-->
            <div class="form-wrap__title"> Выберите время для звонка
            </div>
            <label class="custom-input-time"><input class="custom-input-time__input" type="checkbox" name="scr8-time"/><span class="custom-input-time__lab"></span><span class="custom-input-time__text custom-input-time__text--now"> <span class="d-none d-sm-inline">Позвонить сейчас</span><span class="d-sm-none">Сейчас</span></span><span class="custom-input-time__text custom-input-time__text--time"> <span class="d-none d-sm-inline">Позвонить по времени</span><span class="d-sm-none">По времени</span></span>
            </label>
            <div class="toggle-wrap-input-js">
              <div class="form-wrap__input-wrap"><input class="form-wrap__input" type="text" placeholder="Например, 10 апреля в 14:00" name="time"/>
              </div>
              <!-- +e.input-wrap-->
            </div>
            <button class="form-wrap__btn" type="submit">Перезвоните мне 
            </button>
            <div class="form-wrap__polite text-secondary"> Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a class="tdu text-secondary" href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- #modal-call-->
    <div class="form-wrap modal-win modal-form" id="modal-order">
      <form action="thanks.php" method="post">
        <input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
        <input class="utm_source" type="hidden" name="utm_source"/>
        <input class="utm_term" type="hidden" name="utm_term"/>
        <input type="hidden" name="formorder" value="formorder"/>
        <div class="row no-gutters">
          <div class="col-6 section-bg d-none d-lg-block" data-bg="img/@2x/modal-2.jpg"></div>
          <div class="col">
            <div class="form-wrap__top-title">Для оформления заказа оставьте Ваши контакты
            </div>
            <input class="order" type="hidden" name="order" value=""/>
            <input class="color" type="hidden" name="color" value=""/>
            <div class="form-wrap__input-wrap">
              <label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input" type="text" placeholder="Иван" name="name" required="required"/>
              </label>
            </div>
            <!-- +e.input-wrap-->
            <div class="tabs">
              <div class="form-wrap__group"> 
                <div class="tabs__caption">
                  <div class="tabs__btn active">
                    <svg class="icon icon-tel2 ">
                      <use xlink:href="img/svg/sprite.svg#tel2"></use>
                    </svg>Телефон
                  </div>
                  <div class="tabs__btn">
                    <svg class="icon icon-whatsapp ">
                      <use xlink:href="img/svg/sprite.svg#whatsapp"></use>
                    </svg>WhatsApp
                  </div>
                  <div class="tabs__btn">
                    <svg class="icon icon-viber ">
                      <use xlink:href="img/svg/sprite.svg#viber"></use>
                    </svg>Viber
                  </div>
                </div>
              </div>
              <div class="tabs__wrap">
                <div class="tabs__content active">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите телефон:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="tel" required="required"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
                <div class="tabs__content">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите whatsapp:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="whatsapp"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
                <div class="tabs__content">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите viber:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="viber"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
              </div>
            </div>
            <div class="h6">Специалист компании &laquo;АБлок&raquo; Зоя позвонит  вам прямо сейчас или в&nbsp;другое рабочее время: мы&nbsp;работаем ежедневно с&nbsp;09:00 до&nbsp;20:00</div>
            <div class="form-wrap__toggle"> <span>Напишите, что вам нужно, если хотите</span>
            </div>
            <div class="form-wrap__toggle-block">
              <div class="form-wrap__input-wrap"><textarea class="form-wrap__input form-control" placeholder="Текст сообщения" name="comment"></textarea>
              </div>
              <!-- +e.input-wrap-->
            </div>
            <button class="form-wrap__btn" type="submit">Оформить заказ
            </button>
            <div class="form-wrap__polite text-secondary"> Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a class="tdu text-secondary" href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- #modal-order-->
    <div class="form-wrap modal-win modal-form" id="modal-order-calc">
      <form action="thanks.php" method="post">
        <input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
        <input class="utm_source" type="hidden" name="utm_source"/>
        <input class="utm_term" type="hidden" name="utm_term"/>
        <input type="hidden" name="formorder" value="formorder"/>
        <div class="row no-gutters">
          <div class="col-6 section-bg d-none d-lg-block" data-bg="img/@2x/modal-2.jpg"></div>
          <div class="col">
            <div class="form-wrap__top-title">Сообщите, что вам нужно заказать
            </div>
            <input class="order" type="hidden" name="order" value=""/>
            <input class="color" type="hidden" name="color" value=""/>
            <input class="choose-type" type="hidden" name="choose-type" value=""/>
            <input class="cost" type="hidden" name="cost" value=""/>
            <input class="result" type="hidden" name="result" value=""/>
            <input class="length" type="hidden" name="length" value=""/>
            <input class="width" type="hidden" name="width" value=""/>
            <input class="thickness" type="hidden" name="thickness" value=""/>
            <input class="windows" type="hidden" name="windows" value=""/>
            <input class="doors" type="hidden" name="doors" value=""/>
            <div class="form-wrap__input-wrap">
              <label><span class="form-wrap__title">Как к вам обращаться?</span><input class="form-wrap__input" type="text" placeholder="Иван" name="name" required="required"/>
              </label>
            </div>
            <!-- +e.input-wrap-->
            <div class="tabs">
              <div class="form-wrap__group"> 
                <div class="tabs__caption">
                  <div class="tabs__btn active">
                    <svg class="icon icon-tel2 ">
                      <use xlink:href="img/svg/sprite.svg#tel2"></use>
                    </svg>Телефон
                  </div>
                  <div class="tabs__btn">
                    <svg class="icon icon-whatsapp ">
                      <use xlink:href="img/svg/sprite.svg#whatsapp"></use>
                    </svg>WhatsApp
                  </div>
                  <div class="tabs__btn">
                    <svg class="icon icon-viber ">
                      <use xlink:href="img/svg/sprite.svg#viber"></use>
                    </svg>Viber
                  </div>
                </div>
              </div>
              <div class="tabs__wrap">
                <div class="tabs__content active">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите телефон:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="tel" required="required"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
                <div class="tabs__content">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите whatsapp:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="whatsapp"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
                <div class="tabs__content">
                  <div class="form-wrap__input-wrap">
                    <label><span class="form-wrap__title">Введите viber:</span><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="viber"/>
                    </label>
                  </div>
                  <!-- +e.input-wrap-->
                </div>
              </div>
            </div>
            <div class="h6">Специалист компании &laquo;АБлок&raquo; Зоя позвонит  вам прямо сейчас или в&nbsp;другое рабочее время: мы&nbsp;работаем ежедневно с&nbsp;09:00 до&nbsp;20:00</div>
            <div class="form-wrap__toggle"> <span>Напишите, что вам нужно, если хотите</span>
            </div>
            <div class="form-wrap__toggle-block">
              <div class="form-wrap__input-wrap"><textarea class="form-wrap__input form-control" placeholder="Текст сообщения" name="comment"></textarea>
              </div>
              <!-- +e.input-wrap-->
            </div>
            <button class="form-wrap__btn" type="submit">Обсудить заказ
            </button>
            <div class="form-wrap__polite text-secondary"> Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a class="tdu text-secondary" href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- #modal-order-calc-->
    <div class="modal-win modal-win--tech text-center" id="modal-tech">
      <div class="h3">Соблюдаем технологию<br/>производства и хранения</div>
      <div class="row no-gutters">
          <div class="modal-win__col-tech col-md-4">
            <div class="modal-win__item">
              <!-- picture-->
              <picture> 
                <source srcset="img/@2x/webp/storage-1.webp" type="image/webp" media="(min-width:576px)"/>
                <source srcset="img/@1x/webp/storage-1.webp" type="image/webp"/>
                <source srcset="img/@2x/storage-1.png" type="image/png" media="(min-width:576px)"/>
                <source srcset="img/@1x/storage-1.png" type="image/png"/><img src="img/@2x/storage-1.png" alt=""/>
              </picture>
              <!-- /picture-->
              <div class="modal-win__title">Строго соблюдаем пропорции материалов
              </div>
              <p>чтобы получить шлакоблок с характеристиками, нужными при строительстве любых сооружений</p>
            </div>
          </div>
          <div class="modal-win__col-tech col-md-4">
            <div class="modal-win__item">
              <!-- picture-->
              <picture> 
                <source srcset="img/@2x/webp/storage-2.webp" type="image/webp" media="(min-width:576px)"/>
                <source srcset="img/@1x/webp/storage-2.webp" type="image/webp"/>
                <source srcset="img/@2x/storage-2.png" type="image/png" media="(min-width:576px)"/>
                <source srcset="img/@1x/storage-2.png" type="image/png"/><img src="img/@2x/storage-2.png" alt=""/>
              </picture>
              <!-- /picture-->
              <div class="modal-win__title">Пропариваем горячим паром при температуре 70-95°C —
              </div>
              <p>шлакоблок достигает до 90% марочной прочности уже через сутки</p>
            </div>
          </div>
          <div class="modal-win__col-tech col-md-4">
            <div class="modal-win__item">
              <!-- picture-->
              <picture> 
                <source srcset="img/@2x/webp/storage-3.webp" type="image/webp" media="(min-width:576px)"/>
                <source srcset="img/@1x/webp/storage-3.webp" type="image/webp"/>
                <source srcset="img/@2x/storage-3.png" type="image/png" media="(min-width:576px)"/>
                <source srcset="img/@1x/storage-3.png" type="image/png"/><img src="img/@2x/storage-3.png" alt=""/>
              </picture>
              <!-- /picture-->
              <div class="modal-win__title">Храним шлакоблок на транспортных поддонах,
              </div>
              <p>чтобы он не соприкасался с землей</p>
            </div>
          </div>
      </div>
      <div class="modal-win__foot">
        <div class="row">
          <div class="col-auto">
            <svg class="icon icon-info ">
              <use xlink:href="img/svg/sprite.svg#info"></use>
            </svg>
          </div>
          <div class="h6 text-left col">Как правило, заказчику отгружаем шлакоблок со&nbsp;100% марочной прочностью, которому больше 28&nbsp;суток. При срочных заказах возможна отгрузка блока через неделю после изготовления&nbsp;&mdash; на&nbsp;качество стройки это не&nbsp;влияет</div>
        </div>
      </div>
    </div>
    <!-- #modal-tech-->
    <div class="modal-win modal-win--sm modal-win--storage text-center" id="modal-storage">
      <!-- picture-->
      <picture> 
        <source srcset="img/@2x/webp/modal-sm-img.webp" type="image/webp"/>
        <!-- /webp images  --><img src="img/@2x/modal-sm-img.png" alt=""/>
      </picture>
      <!-- /picture-->
      <div class="h5 text-center strong">Бесплатное хранение<br/>на нашей территории</div>
      <div class="h6 fw-500">Вы&nbsp;можете купить шлакоблок даже зимой, а&nbsp;строить летом. Ваш шлакоблок будет храниться на&nbsp;транспортных поддонах, чтобы он&nbsp;не&nbsp;соприкасался с&nbsp;землей.</div>
    </div>
    <!-- #modal-storage-->
    <div class="modal-win modal-win--know text-center" id="modal-know">
      <div class="modal-win__head-text">
        <div class="h3 fw-500">О&nbsp;чем нужно знать<br/>при строительстве из&nbsp;шлакоблока</div>
        <div class="h6 fw-500"> 
          <div class="text-secondary">Шлакоблок — такой материал, что если уже построили, то исправить,  заменить, как, например, коробку двери, не получится. </div>
        </div>
        <div class="h6 fw-500">
             Учитывая, что стоимость шлакоблока это всего лишь ~ 10% от стоимости   <span class="text-secondary"> строительства всего дома, то экономить на качестве стен не имеет смысла</span></div>
      </div>
      <div class="d-none d-sm-block">
        <!-- picture-->
        <picture> 
          <source srcset="img/@2x/webp/modal-know-img.webp" type="image/webp" media="(min-width:576px)"/>
          <source srcset="img/@1x/webp/modal-know-img.webp" type="image/webp"/>
          <source srcset="img/@2x/modal-know-img.png" type="image/png" media="(min-width:576px)"/>
          <source srcset="img/@1x/modal-know-img.png" type="image/png"/><img src="img/@2x/modal-know-img.png" alt=""/>
        </picture>
        <!-- /picture-->
      </div>
    </div>
    <!-- #modal-know-->
    <div class="modal-win modal-win--sm text-center" id="modal-pay">
      <!-- picture-->
      <picture> 
        <source srcset="img/@2x/webp/modal-pay.webp" type="image/webp"/>
        <!-- /webp images  --><img src="img/@2x/modal-pay.png" alt=""/>
      </picture>
      <!-- /picture-->
      <div class="h5 text-center strong">Покупайте шлакоблок,<br/>не выходя из дома</div>
      <div class="h6 fw-500">Мы&nbsp;уверены в&nbsp;качестве, поэтому спокойно отправляем заказ человеку, который не&nbsp;видел нашу продукцию. </div>
      <div class="h6 fw-500">Ни&nbsp;разу водитель не&nbsp;привез шлакоблок обратно!</div>
    </div>
    <!-- #modal-pay-->
    <div class="form-wrap modal-win modal-win--sm modal-win modal-form" id="modal-one-click">
      <form action="thanks.php" method="post">
        <input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
        <input class="utm_source" type="hidden" name="utm_source"/>
        <input class="utm_term" type="hidden" name="utm_term"/>
        <input class="color" type="hidden" name="color" value=""/>
        <input type="hidden" name="formorder" value="formorder"/>
        <div class="h5 strong">Введите номер телефона</div>
        <div class="h6 fw-500">Специалист перезвонит и оформит заказ</div>
        <div class="row no-gutters">
          <div class="col">
            <div class="form-wrap__input-wrap"><input class="form-wrap__input" type="tel" placeholder="+7 (900) 444-44-44" name="tel" required="required"/>
            </div>
            <!-- +e.input-wrap-->
          </div>
          <div class="col-auto">
            <button class="form-wrap__btn btn-success" type="submit">Ок
            </button>
          </div>
        </div>
        <div class="form-wrap__polite text-secondary"> Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a class="tdu text-secondary" href="privacy-policy.pdf" target="_blank">Политикой конфиденциальности</a>
        </div>
      </form>
    </div>
    <!-- #modal-one-click-->
    <!-- modal-->
    <script src="js/jquery.min.js"></script>
    <script src="js/lazy.js"></script>
    <!-- полифил для picture-->
    <script src="libs/picturefill.min.js"></script>
    <!-- полифил для object-fit-->
    <script src="libs/object-fit-images/dist/ofi.min.js"></script>
    <!-- modal libs-->
    <!-- modal libs-->
    <!-- slider libs-->
    <script src="libs/slick/slick.min.js"></script>
    <!-- /slider libs-->
    <!-- for svg libs-->
    <script src="libs/svg4everybody-master/svg4everybody.min.js"></script>
    <!-- /for svg libs-->
    <script src="libs/jquery.touchSwipe.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.min.js"></script>
    <script src="libs/jquery.inputmask.bundle.min.js"></script>
    <script src="js/common.js"></script><svg class="invisible">
<linearGradient id="success-gradient"  x1="0%" y1="0%"    x2="0%" y2="100%">
<stop offset="0%"   stop-color="#8eb930"/>
<stop offset="100%"  stop-color="#a2d032"/>
</linearGradient>
<linearGradient id="primary-gradient" gradientUnits="userSpaceOnUse" x1="165.4035" y1="344.0104" x2="165.4035" y2="397.3238" gradientTransform="matrix(1 0 0 -1 0 504)">
<stop  offset="0" style="stop-color:#1B8ACA"/>
<stop  offset="0.4976" style="stop-color:#27A9E5"/>
<stop  offset="1" style="stop-color:#31C5FC"/>
</linearGradient>
</svg>
  </body>
</html>