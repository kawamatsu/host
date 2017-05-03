sw_status = 0;
reset_form();

function reset_form() {
	if (sw_status == 1) {start_count();}
	timer = 0;
	document.form_sw.counter.value = count_format(0);
}

function start_count() {
	if (sw_status == 0) {
		//�X�^�[�g
		document.form_sw.bstart.value = "�X�g�b�v";
		sw_status = 1;
		timerID = setInterval("count_up()",100); 
	} else {
		//�X�g�b�v
		document.form_sw.bstart.value = "�X�^�[�g";
		sw_status = 0;
		clearInterval(timerID);
	}
}

function count_up() {
	timer++;
	document.form_sw.counter.value = count_format(timer);
}

function count_format(num) {
	var ts = num / 10;
	var tm = Math.floor(ts / 60);
	var ts = (ts % 60).toFixed(1);
	var th = Math.floor(tm / 60);
	tm = tm % 60;
	//�\���̐��`
	if (ts < 10) ts = "0" + ts;
	if (tm < 10) tm = "0" + tm;
	if (th < 10) th = "0" + th;
	return th + ":" + tm + ":" + ts;
}
