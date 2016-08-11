/* 管理画面用 */

/* Javascript など部品ファイルへのリンクエラーチェック用
 * 無事設置が終わったら、admin/*_1.html のメッセージと合わせて
 * 削除して構いません。*/
$("#check-if-js-linked").css('display', 'none');
/* ここまで */

function set_param(d,m,s,n,fid,msg){
	var FM = document.getElementById(fid);
	if (FM){
		if(FM.s){FM.s.value = s;}
		if(FM.d){FM.d.value = d;}
		if(FM.m){FM.m.value = m;}
		if(FM.n){FM.n.value = n;}
		if (msg && msg != ''){
			if(confirm(msg)){
				FM.submit();
			}
		} else {
			FM.submit();
		}
	}
	return false;
}

function set_checked(itemID){
	var EM = document.getElementById(itemID);
	if (EM){
		EM.checked = true;
	}
}


function is_ctrl(pressKey){
        if(pressKey==17){ //ctrl
                return 1;
        } else if (navigator.userAgent.match(/macintosh/i)){
                if (pressKey == 224 && navigator.userAgent.match(/firefox/i)){
                        return 1;
                } else if (pressKey == 91 || pressKey == 93){
                        return 1;
                }
        }
        return 0;
}
function disable_reload(e){
        if(navigator.userAgent.match(/msie/i) && window.event){
                window.event.returnValue=false;
                window.event.keyCode=0
        } else
        if (navigator.userAgent.match(/macintosh/i) || e.preventDefault){
                e.preventDefault();
                e.stopPropagation();
        }
        return false;
}
function catchkeydown(e){
        var pressKey;
        if (eval(e)){
                pressKey=e.keyCode;
        } else {
                pressKey=event.keyCode;
        }
        if(is_ctrl(pressKey)==1){ //ctrl
                if_ctrl=1;
                if(if_r==1){return disable_reload(e);}
        }
        if(pressKey==82){ //r
                if_r=1;
                if(if_ctrl==1){return disable_reload(e);}
        }
        if(pressKey==116){ //f5
                if (navigator.userAgent.match(/safari/i) 
                        && !navigator.userAgent.match(/chrome/i)){
                        window.location="%_myname_%?n=%_n_%&i=%_i_%";
                        return true;
                } else {
                        return disable_reload(e);
                }
        }
}
function catchkeyup(e){
        var pressKey;
        if (eval(e)){
                pressKey=e.keyCode;
        } else {
                pressKey=event.keyCode;
        }
        if(is_ctrl(pressKey)==1){ //ctrl
                if_ctrl=0;
                if(if_r==1){return disable_reload(e);}
        }
        if(pressKey==82){ //r
                if_r=0;
                if(if_ctrl==1){return disable_reload(e);}
        }
        if(pressKey==116){ //f5
                if (navigator.userAgent.match(/safari/i) 
                        && !navigator.userAgent.match(/chrome/i)){
                        window.location="%_myname_%?n=%_n_%&i=%_i_%";
                } else {
                        return disable_reload(e);
                }
        }
}
