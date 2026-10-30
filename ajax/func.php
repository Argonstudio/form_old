<?
function send_mail($email, $subject, $msg, $from, $file=NULL)
    {
        $boundary = "--" . md5(uniqid(time()));
        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
        $headers .= "From: $from\n";
        $multipart = "--$boundary\n";
        $multipart .= "Content-Type: text/html; charset=utf-8\n";
        $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";
        $multipart .= "$msg\n\n";
        if($file) foreach ($file as $key => $value) {
           $fp = fopen($value, "rb");
           $fl = fread($fp, filesize($value));
           $fn=basename($value);
           $multipart .= "--$boundary\n";
           $multipart .= "Content-Type: application/octet-stream\n";
           $multipart .= "Content-Transfer-Encoding: base64\n";
           $multipart .= "Content-Disposition: attachment; filename=\"$fn\"\n\n";
           $multipart .= chunk_split(base64_encode($fl)) . "\n";
        }
        $multipart .= "--$boundary--\n";

        $val=mail($email, $subject, $multipart, $headers);
        return $val;
    }
    ?>
