<?php

class Rokumaru_Mail{
	public $email;
	public $title;
	public $header;
	public $honbun;
	public $footer;
	
	public function __construct($header){
		$this->header=$header;
		$footer="\n";
		$footer.="□□□□□□□□□□□□□\n";
		$footer.="〜安心野菜のろくまる農園〜\n";
		$footer.="\n";
		$footer.="〇〇県ろくまる郡ろくまる村123-4\n";
		$footer.="電話090-1234-3456\n";
		$footer.="メール　info@rokumaru.co.jp\n";
		$footer.="□□□□□□□□□□□□□\n";
	}
	
	public function makeMail($title,$onamae,$mailData,$chumon=null){
		$this->title=$title;
		
		$honbun="\n";
		$honbun='';
		$honbun.=$onamae."様\n\nこの度はご注文ありがとうございました。\n";
		$honbun.="\n";
		$honbun.="ご注文商品\n";
		$honbun.="--------------------------\n";
		
		foreach($mailData as $val){
			$honbun.=$val[0].'';
			$honbun.=$val[1].'円x';
			$honbun.=$val[2].'個=';
			$honbun.=$val[3]."円\n";
		}
		
		$honbun.="送料は無料です。\n";
		$honbun.="--------------------------\n";
		$honbun.="\n";
		$honbun.="代金は以下の口座にお振込ください。\n";
		$honbun.="ろくまる銀行　野菜支店　普通口座　1234567\n";
		$honbun.="入金確認が取れ次第、梱包、発送させて頂きます。\n";
		$honbun.="\n";
		
		if($chumon=='chumontouroku'){
			$honbun.="会員登録が完了いたしました。\n";
			$honbun.="次回からメールアドレスとパスワードでログインしてください。\n";
			$honbun.="ご注文が簡単にできるようになります。\n";
			$honbun.="\n";
		}
		
		$honbun=$honbun.$this->footer;
		$this->honbun=$honbun;
	}
	
	
	public function sendMail($email){
		$honbun=$this->honbun;
		$honbun=html_entity_decode($honbun,ENT_QUOTES,'UTF-8');
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$title=$this->title;
		$header=$this->header;
		mb_send_mail($email,$title,$honbun,$header);
	}
	
}

?>












