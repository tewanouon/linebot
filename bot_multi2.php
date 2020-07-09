
<?php
/*$proxy = '27.254.36.37:26';*/

$strAccessToken = 'PN0dQbQ7ywnSymsFIblKXmEaZ6tpgbBOgfMH9Fvu2p7E0PmAfwrXZJflnhldszpfLBlU3ZH+r9Zxgne2he/itNNEFbbiztCXez0xsVotuHMxmMWryKqaVP4pFlthZOxr8vbeQOJ1ZLvv0QjGDsEyjAdB04t89/1O/w1cDnyilFU=';

/*curl_setopt($ch, CURLOPT_PROXY, $proxy);*/


$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 

 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json; charset=UTF-8";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$strArrText =  strtolower($arrJson['events'][0]['message']['text']);

$arrHello = array("สวัสดี",strtolower("hello"),strtolower("hi"));
$arrHello2 = array("ชื่ออะไร",strtolower("What name"),strtolower("Who"));
$arrHello3 = array("ทำอะไรได้บ้าง",strtolower("What can you do"),strtolower("you do?"));
$arrHello4 = array(strtolower("Tewan-resume"),strtolower("Tewan resume"),strtolower("Tewanresume?"));
$arrHello5 = array(strtolower("content-resume"),strtolower("content resume"),strtolower("contentresume?"));
$arrHello6 = array(strtolower("ebook"),strtolower("ebook list"),strtolower("ebook?"));
$arrHello7 = array("imgsource","ภาพต้นฉบับ","image before");
$arrHello8 = array("imgdesc","ภาพแปลงแล้ว","image after");


/*  if($arrJson['events'][0]['message']['type']=='text') {   */
	
	
	if(in_array($strArrText,$arrHello) ){ 
	  
		/*$arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
		*/
	 
	 /*
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "location";
	  $arrPostData['messages'][0]['title'] = "Linde Thailand";
	  $arrPostData['messages'][0]['address'] = "15th Floor, Bangna Tower A, 2/3 Moo 14, Bangna-Trad Road, (K.M. 6.5)\bT.Bangkaew, A.Bangplee, Samutprakarn 10540, Thailand\bPhone (66-2) 338-6100\bFax (66-2) 312-0126";
	  $arrPostData['messages'][0]['latitude'] = 13.6587474;
	  $arrPostData['messages'][0]['longitude'] = 100.6618822;
	*/

	 $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken']; 
	  $arrPostData['messages'][0]['type'] = "sticker";
	  $arrPostData['messages'][0]['packageId'] = "1";
		$arrPostData['messages'][0]['stickerId'] = "2";
		 
		
	}else if(in_array($strArrText,$arrHello2)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
	}else if(in_array($strArrText,$arrHello3)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
	}else if(in_array($strArrText,$arrHello4)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "Let me introduce myself. This's my profile. http://appl.linde.co.th/me-i/Tewan_Ouon_res.pdf";
	}else if(in_array($strArrText,$arrHello5)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "I believe my skills and past work experiences make me a good fit for this position.\n\n#Let see my profile by add line id as below.\n\n#LINE id '@dws1640v', type 'Tewan resume'";
	}else if(in_array($strArrText,$arrHello6)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = "SharePoint 2013 Branding and User Interface Design\n
	http://filepi.com/i/fEkIXyo
	\n\n
	Pro SharePoint 2013 App Development\n
	http://filepi.com/i/UZChhKs
	\n\n
	Microsoft SharePoint 2013 App Development\n
	http://filepi.com/i/TMhrzwG
	\n\n
	Pro SharePoint 2013 Branding and Responsive Web Development\n
	http://filepi.com/i/0LbTE6r
	\n\n
	Microsoft SharePoint 2013: Designing and Architecting Solutions\n
	http://filepi.com/i/kLXg8Ke
	\n\n
	Microsoft SharePoint 2013 Inside Out\n
	http://filepi.com/i/zvbRFQZ";  
	}else if(in_array($strArrText,$arrHello7)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "image";
	  $arrPostData['messages'][0]['originalContentUrl'] = "https://appl.linde.co.th/me-i/img1.png";
		$arrPostData['messages'][0]['previewImageUrl'] = "https://appl.linde.co.th/me-i/img1.png";
	}else if(in_array($strArrText,$arrHello8)){
	  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "image";
	  $arrPostData['messages'][0]['originalContentUrl'] = "https://appl.linde.co.th/me-i/img3.jpg";
		$arrPostData['messages'][0]['previewImageUrl'] = "https://appl.linde.co.th/me-i/img3.jpg";
    }else if($arrJson['events'][0]['message']['type']=='image' ){
		$response = $bot->getMessageContent($arrJson['events'][0]['message']['id']);
		if($response->isSucceeded()) {
			$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken']; 
			$arrPostData['messages'][0]['type'] = "sticker";
			$arrPostData['messages'][0]['packageId'] = "1";
			$arrPostData['messages'][0]['stickerId'] = "4";
		}else {	
		
			  $arrPostData = array();
	  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
	  $arrPostData['messages'][0]['type'] = "text";
	  $arrPostData['messages'][0]['text'] = 'nonon' ;
		}
		
		


	}else{
     $arrPostData = array();
     $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
     $arrPostData['messages'][0]['type'] = "text";
     $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
	}
/*  check content type */

 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>