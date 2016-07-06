//모듈 추출

//get - 조회
//post - 제출
//put - 수정
//del - 삭제
var http = require('http');
var express = require('express');

//웹 서버 생성
var app = express();
app.use(express.static('public'));
app.use(app.router);



//웹 서버를 실행
http.createServer(app).listen(52273,function(){
  console.log('Server Running at http://127.0.0.1:52273');
});
