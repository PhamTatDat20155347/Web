
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <base href="{{asset('')}}">
 <title>One Page Resume</title>

 <style type="text/css">
 * { margin: 0; padding: 0; }
 body { font: 16px Helvetica, Sans-Serif; line-height: 24px; }
 .clear { clear: both; }
 #page-wrap { width: 900px; margin: 40px auto 60px; }
 #pic { float: right; margin: -30px 0 0 0; }
 h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
 h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
 h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
 p { margin: 0 0 16px 0; }
 a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
 a:hover { border-bottom-style: solid; color: black; }
 ul { margin: 0 0 32px 17px; }
 #objective { }
 #objective p { font-family: arial,sans-serif;  color: #666; }
 dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
 dd { width: 600px; float: right; }
 dd.clear { float: none; margin: 0; height: 15px; }
</style>
</head>

<body>
<a href="trangchu"><p style="margin-top: 20px; margin-left: 100px; color: blue;"><span class="glyphicon glyphicon-arrow-left"></span> Quay trở lại trang chủ </p></a>

<div id="page-wrap">


    <div id="contact-info" class="vcard">

        <!-- Microformats! -->
        <h1>THƯ THÔNG BÁO TRÚNG TUYỂN PHỎNG VẤN</h1>
        <h2 align="center" class="fn">Công ty {{$rec->post->user->congty}} xin trân trọng thông báo</h2>

        <p>
            <span class="tel">{{$rec->cv->user->fullname}} thân mến,</span><br />
        </p>
    </div>

    <div id="objective">
        <p>
            Cảm ơn bạn đã ứng tuyển cho vị trí {{$rec->post->title}} của công ty {{$rec->post->user->congty}} chúng tôi!<br><br>

            Sau khi xem xét đơn ứng tuyển của bạn, công ty chúng tôi rất ấn tượng và mong muốn mời bạn tham gia buổi phỏng vấn cho vị trí {{$rec->post->title}} tại công ty chúng tôi. <br> <br>

            Bạn sẽ phỏng vấn với trưởng phỏng nhân sự là anh Phạm Tất Đạt.<br><br>
            - Khi đi bạn cần chuẩn bị đầy đủ kiến thức về vị trí mà bạn ứng tuyển.<br><br>
            - Trang phục gọn gàng...<br><br>

            Chúng tôi sẽ tổ chức phỏng vấn các ứng viên tại các khung giờ sau: <br>
            - 8h00 - 10h00<br>
            - 14h00 -16h00<br><br>
            Nếu không có lựa chọn nào phù hợp, hãy nói cho chúng tôi biết khung giờ thích hợp của bạn nhé. Hạn để trả lời thư này là ngày: 5/2/2018 thông qua email của trường phòng nhân sự. Mọi thay đổi cần thông báo 24h trước khi phỏng vấn.<br><br>
            Hãy xác nhận thư này khi bạn nhận được kèm theo khoảng thời gian phỏng vấn phù hợp để chúng tôi tiếp đón bạn chu đáo.<br><br>
            Rất mong nhận được phản hồi sớm từ bạn!<br><br>
            Liên hệ:<br>
            - Điện thoại: {{$rec->post->user->dienthoai}}<br>
            - Email: {{$rec->post->user->email}}<br><br>
            <span style="margin-left: 600px;">Trân trọng,</span><br>
            <span style="margin-left: 610px;"><b>{{$rec->post->user->username}}</b></span><br>
            <span style="margin-left: 590px;"><b>{{$rec->post->user->fullname}}</b></span><br>
        </p>
    </div>



</div>

</body>

</html>