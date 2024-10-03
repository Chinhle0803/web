<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'TẠO TÀI KHOẢN | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<br><style>
{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-weight: 300;
}
body ::-webkit-input-placeholder {
  /* WebKit browsers */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
body :-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body ::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body :-ms-input-placeholder {
  /* Internet Explorer 10+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
.wrapper {
  left: 0;
  width: 100%;
  height: 400px;
  overflow: hidden;
}
.wrapper.form-success .container h1 {
  transform: translateY(85px);
}
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 80px 0;
  height: 400px;
  text-align: center;
  backdrop-filter: blur(10px);
  border-radius: 10px;
}
.container h1 {
  font-size: 40px;
  color: white;
  transition-duration: 1s;
  transition-timing-function: ease-in-out input;
  font-weight: 200;
}
form {
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
form input {
  appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: #1c1c1c;
  width: 300px;
  color: white;
}
form button {
  appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #000;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
  transition-duration: 0.25s;

}
form button:hover {
  background-color: #1d2746;
}

.register {
  color: #aaa;
  font-size: 17px;
  display: block;
}
.register a {
  color: #fff;
  text-decoration: none;
  box-shadow: inset 0 -2px 0 transparent;
  margin-left: -5px;
  user-select: none;
}
.register a:hover {
  box-shadow: inset 0 -2px 0 #fff;
}
.SW-container {
            background: #2e354b;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px #000;
        }
        
        .SW-button {
            border-radius: 5px;
            font-weight: 400;
            transition: .3s;
            padding: 10px;
            background: #5472d2;
            border: none;
            color: #fff;
            transition: .2s ease-in-out;
            outline: none;
        }
        
        .uwu {
            background: 50% 100% / 50% 50% no-repeat radial-gradient(ellipse at bottom, #fff, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: white;
            -webkit-animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
            animation: reveal 3000ms ease-in-out forwards 200ms, glow 2500ms linear infinite 2000ms;
        }
        
        @-webkit-keyframes reveal {
          80% {
            letter-spacing: 8px;
          }
          100% {
            background-size: 300% 300%;
          }
        }
        @keyframes reveal {
          80% {
            letter-spacing: 8px;
          }
          100% {
            background-size: 300% 300%;
          }
        }
        @-webkit-keyframes glow {
          40% {
            text-shadow: 0 0 8px #fff;
          }
        }
        @keyframes glow {
          40% {
            text-shadow: 0 0 8px #fff;
          }
        }
        
        .or-spacer {
            margin-top: 31px;
          width: 420px;
          position: relative;
        }
        
        .or-spacer .mask {
          overflow: hidden;
          height: 20px;
        }
        .or-spacer .mask:after {
          content: '';
          display: block;
          margin: -25px auto 0;
          width: 100%;
          height: 25px;
          border-radius: 125px / 12px;
          box-shadow: 0 0 8px black;
        }
        .or-spacer span {
          width: 50px;
          height: 50px;
          position: absolute;
          bottom: 100%;
          margin-bottom: -25px;
          left: 50%;
          margin-left: -25px;
          border-radius: 100%;
          box-shadow: 0 2px 4px #999;
          background: white;
        }
        .or-spacer span i {
          position: absolute;
          top: 4px;
          bottom: 4px;
          left: 4px;
          right: 4px;
          border-radius: 100%;
          border: 1px dashed #aaa;
          text-align: center;
          line-height: 40px;
          font-style: normal;
          color: #999;
        }
        
        .SW-category {
            flex: 1 0 21%;
            margin: 10px;
            background: #2e354b;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px #000;
            transition: .2s ease-in-out;
        }
        
        .SW-category .SW-categoryIcon {
            float:left;
            display:block;
            height:100%;
            width:50px;
            background:hsla(0,0%,100%,.07843);
            position:relative;
            margin-right:10px
        }
        
        .SW-category .SW-categoryIcon svg {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 30px;
        }
        
        .SW-input {
            appearance: none;
            outline: 0;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            padding: 10px 15px;
            margin: 0 auto 10px auto;
            display: block;
            font-size: 18px;
            color: white;
            -webkit-transition-duration: 0.25s;
                  transition-duration: 0.25s;
            font-weight: 300;
        }
        
        .SW-input:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
        
        .SW-input:focus {
            background-color: #1c1c1c;
            color: white;
        }
        
        #terminal {
          width: 600px;
          height: 400px;
          background-color: #2d2d2d;
          position: relative;
          top: 50%;
          border-radius: 5px;
          box-shadow: 0px 0px 70px 7px rgba(0, 0, 0, 0.75);
          opacity: 1;
          padding: 10px;
        }
        .title {
          text-align: center;
          font-size: 0.85em;
          color: #999;
          height: 18px;
          position: relative;
          top: 2px;
        }
        .window {
          color: #d6d6d6;
          font-size: 14px;
          font-family: monospace;
          overflow-wrap: break-word;
          line-height: 1.25em;
        }
        .icons {
          margin: 0;
          position: absolute;
          list-style: none;
          padding: 0;
        }
        ul.icons li {
          width: 12px;
          height: 12px;
          border-radius: 50%;
          display: inline-block;
        }
        ul.icons li.close {
          background-color: #ff5552;
        }
        ul.icons li.minimize {
          background-color: #ffbe42;
        }
        ul.icons li.maximize {
          background-color: #31c74a;
        }
        code {
          display: block;
        }
        code:before {
          content: '$' ' ';
        }
        code.output:before,
        code.out:before {
          content: '';
        }
        
        ::selection {
          color: #2d2d2d;
          background: #d6d6d6;
        }
        
        .green {
          color: #a9d3ab;
        }
        .red {
          color: #f58e8e;
        }
        .yellow {
          color: #fee08a;
        }
        .blue {
          color: #99caf4;
        }
        .cyan {
          color: #79d4d5;
        }
        .magenta {
          color: #d6add5;
        }
        .black {
          color: #646464;
        }
        .bold {
          font-style: bold;
        }
        .italic {
          font-style: italic;
        }
        .underline {
          text-decoration: underline;
        }
        
        #new-year {
          position: relative;
          top: 50%;
          width: 90%;
          height: 90%;
          margin: 0 auto 0 auto;
        }
        
        #new-year svg {
          width: 100%;
          height: 100%;
        }
        
        .stroke-fill {
          stroke-dasharray: 1000;
          stroke-dashoffset: 1000;
          stroke: #fff;
        }
        
        #happy-stroke {
          -webkit-animation: happy-dash 1.7s linear normal forwards;
                  animation: happy-dash 1.7s linear normal forwards;
        }
        
        #n-stroke {
          -webkit-animation: dash 2s 1.8s linear normal forwards;
                  animation: dash 2s 1.8s linear normal forwards;
        }
        
        #ew-stroke {
          -webkit-animation: dash 2s 2.5s linear normal forwards;
                  animation: dash 2s 2.5s linear normal forwards;
        }
        
        #y-stroke {
          -webkit-animation: dash 2s 3.3s linear normal forwards;
                  animation: dash 2s 3.3s linear normal forwards;
        }
        
        #ye-stroke {
          -webkit-animation: dash 1s 4s linear normal forwards;
                  animation: dash 1s 4s linear normal forwards;
        }
        
        #ear-stroke {
          -webkit-animation: dash 2s 4.18s linear normal forwards;
                  animation: dash 2s 4.18s linear normal forwards;
        }
        
        #underline-stroke {
          -webkit-animation: dash 0.5s 5.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) normal forwards;
                  animation: dash 0.5s 5.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) normal forwards;
        }
        
        @-webkit-keyframes dash {
          0% {
            stroke-dashoffset: 1000;
          }
          100% {
            stroke-dashoffset: 0;
          }
        }
        
        @keyframes dash {
          0% {
            stroke-dashoffset: 1000;
          }
          100% {
            stroke-dashoffset: 0;
          }
        }
        @-webkit-keyframes happy-dash {
          0% {
            stroke-dashoffset: 1000;
          }
          6% {
            stroke-dashoffset: 976;
          }
          6.01% {
            stroke-dashoffset: 958;
          }
          13% {
            stroke-dashoffset: 936;
          }
          13.01% {
            stroke-dashoffset: 905;
          }
          20% {
            stroke-dashoffset: 896;
          }
          20.01% {
            stroke-dashoffset: 864;
          }
          27% {
            stroke-dashoffset: 840;
          }
          27.01% {
            stroke-dashoffset: 830;
          }
          34% {
            stroke-dashoffset: 808;
          }
          34.01% {
            stroke-dashoffset: 775;
          }
          40% {
            stroke-dashoffset: 764;
          }
          40.01% {
            stroke-dashoffset: 738;
          }
          60% {
            stroke-dashoffset: 688;
          }
          60.01% {
            stroke-dashoffset: 658;
          }
          80% {
            stroke-dashoffset: 610;
          }
          80.01% {
            stroke-dashoffset: 580;
          }
          90% {
            stroke-dashoffset: 555;
          }
          90.01% {
            stroke-dashoffset: 543;
          }
          99.99% {
            stroke-dashoffset: 525;
          }
          100% {
            stroke-dashoffset: 0;
          }
        }
        @keyframes happy-dash {
          0% {
            stroke-dashoffset: 1000;
          }
          6% {
            stroke-dashoffset: 976;
          }
          6.01% {
            stroke-dashoffset: 958;
          }
          13% {
            stroke-dashoffset: 936;
          }
          13.01% {
            stroke-dashoffset: 905;
          }
          20% {
            stroke-dashoffset: 896;
          }
          20.01% {
            stroke-dashoffset: 864;
          }
          27% {
            stroke-dashoffset: 840;
          }
          27.01% {
            stroke-dashoffset: 830;
          }
          34% {
            stroke-dashoffset: 808;
          }
          34.01% {
            stroke-dashoffset: 775;
          }
          40% {
            stroke-dashoffset: 764;
          }
          40.01% {
            stroke-dashoffset: 738;
          }
          60% {
            stroke-dashoffset: 688;
          }
          60.01% {
            stroke-dashoffset: 658;
          }
          80% {
            stroke-dashoffset: 610;
          }
          80.01% {
            stroke-dashoffset: 580;
          }
          90% {
            stroke-dashoffset: 555;
          }
          90.01% {
            stroke-dashoffset: 543;
          }
          99.99% {
            stroke-dashoffset: 525;
          }
          100% {
            stroke-dashoffset: 0;
          }
        }
        
        .border-glow {
          box-shadow: 0 0 1rem 0 #8737ff;
          border-radius: 10px;
        }
        
        .chino-marquee-style {
            display: flex;
            width: 700px;
            height: 50px;
            margin:0 auto;
            background: #2e354b;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 0 10px #000;
        }
        .change-form-btn {
              font-size: 10px;
              color: rgb(134, 134, 134);
            
              margin-left: 10px;
            }
            
            .change-form-btn a {
              font-size: 10px;
              color: rgb(189, 189, 189);
              padding-bottom: 5px;
            }
            
            .change-form-btn a:hover {
              border-bottom: 2px solid #38d39f;
            }
</style>
<br>
<br>
<div class="wrapper">
    <div class="container SW-container">
        <h1>Tạo Tài Khoản !</h1>
        <form class="form">
            <input type="text" placeholder="Nhập tài khoản" id="username" autocomplete="off">
            <input type="password" placeholder="Nhập mật khẩu" id="password" autocomplete="off">
            <input type="password" placeholder="Nhập lại mật khẩu" id="repassword" autocomplete="off">
            <button class="SW-button" type="button" id="Register">Đăng Kí</button>
        </form>
        <span class="change-form-btn"> Đã có tài khoản ?
                            <a href="/Auth/Logins"> Đăng nhập tại đây </a>
                        </span>
    </div>
</div>
</div>


<script type="text/javascript">
$("#Register").on("click", function() {

    $('#Register').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxstheme2/Auth.php");?>",
        method: "POST",
        data: {
            type: 'Register',
            username: $("#username").val(),
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Register').html(
                    'Đăng Ký')
                .prop('disabled', false);
        }
    });
});
</script>


<?php 
    require_once("../../public/client/Footer.php");
?>