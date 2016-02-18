<?php
if( !isset($_POST['email']) OR !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)  )
{
    die('{"error":"請填入合法的電子郵件地址。"}');
}
$email = $_POST['email'];

if( !isset($_POST['name']) OR empty($_POST['name']) )
{
    die('{"error":"訂閱人姓名不可以為空白。"}');
}
$name = $_POST['name'];

$csv = fopen('mail-list.csv','r');
$header = fgetcsv($csv);
$mails = array();
while( $data = fgetcsv($csv) )
{
    $mails[] = $data[0];
    //$row = array_combine($header,$data);
    //$mails[] = $row['email'];
}
fclose($csv);

if( in_array($email,$mails) )
{
    die('{"error":"E-mail 已經訂閱。"}');
}

$event = 'DSC';
if( isset($_POST['event']) AND !empty($_POST['event']) )
{
    $event = $_POST['event'];
}

$data = array(
    $email,
    $name,
    date('Y-m-d H:i:s'),
    $event,
    $_SERVER['REMOTE_ADDR']
);

$fp = fopen('mail-list.csv','a');
fwrite($fp,'"'.implode('","',$data).'"'.PHP_EOL);
fclose($fp);
echo '{"status":"已為 ' . $name . ' (' . $email . ') 訂閱。"}';