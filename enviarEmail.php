<?php
	$name = addslashes($_POST['name']);
	$mail = addslashes($_POST['email']);
	$phone = addslashes($_POST['phone']);
	$message = addslashes($_POST['message']);
	
	$nameEmpty = empty($name);
	$mailEmpty = empty($mail);
	$phoneEmpty = empty($phone);
	$messageEmpty = empty($message);

	if ($nameEmpty || $mailEmpty || $phoneEmpty || $messageEmpty) {
		$str = '';
		$str .= $nameEmpty ? 'nome, ' : "";
		$str .= $mailEmpty ? 'email, ' : "";
		$str .= $phoneEmpty ? 'telefone, ' : "";
		$str .= $messageEmpty ? 'mensagem ' : "";

		echo $str."inputs invalidos, por favor preencha todos os campos";
		return;

	} else {
		$to = 'admin@reidomicroondas.com.br';
		$subject = 'Novo contato '.$name;
		$body = '<h1>'.$subject.'<h1>'
		.'<p>'.$message.'</p>'
		.'\r\nfrom:'.$name
		.'\r\nemail:'.$mail.
		'\r\ntelefone:'.$phone;
		$header = 'From:contato@reidomicroondas.com.br'.'\r\n'.
							'Reply-To:'.$mail.'\r\n';
							'X=Mailer=PHP/'.phpversion();
		

		if (mail($to, $subject, $body, $header))	echo 'Email enviado';
		else echo 'Erro ao enviar email';
	}
