<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Report Submitted | Civilinkon</title>
<style>
*{box-sizing:border-box}
body{margin:0;font-family:Arial,sans-serif;background:#fff;color:#171717}
main{max-width:650px;margin:65px auto;padding:25px;text-align:center}
.check{font-size:90px;color:#ff602c}
h1{font-size:30px;margin:12px 0}
h1 span{color:#ff5722}
p{color:#888;line-height:1.6}
.panel{border:1px solid #f3d5c8;border-radius:12px;padding:24px;margin:30px 0}
.code{background:#fff0e8;padding:16px;border-radius:8px;font-size:22px;font-weight:bold;letter-spacing:1px}
button{border:0;background:#ff5722;color:white;padding:13px 25px;border-radius:30px;cursor:pointer}
a{display:inline-block;text-decoration:none;color:#ff5722;margin:10px}
</style>
</head>
<body>
<main>
<div class="check">✓</div>
<h1>REPORT SUBMITTED<br><span>SUCCESSFULLY!</span></h1>
<p>Thank you for helping make our community better.<br>Your report has been received and will be reviewed by our team.</p>
<div class="panel">
<p><b>Your Tracking Code</b></p>
<div class="code">{{ $trackingCode }}</div>
<p>Save this tracking code to check your report progress later.</p>
<button onclick="navigator.clipboard.writeText('{{ $trackingCode }}')">Copy Code</button>
<br><br>
<a href="{{ route('track.index', ['tracking_code' => $trackingCode]) }}">Track My Report →</a>
<a href="{{ route('reports.create') }}">Submit Another Report</a>
</div>
</main>
</body>
</html>
