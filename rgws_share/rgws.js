/* 
 * 牌選択、画像表示
 */
function selectDora(name, src) {
document.getElementById('dora').value = document.getElementById('dora').value + name;
document.getElementById('doraView').innerHTML = document.getElementById('doraView').innerHTML + src;
}

var haipaiImgCnt = 0;
function selectHaipai(name, src) {
if(haipaiImgCnt < 14) {
document.getElementById('haipai').value = document.getElementById('haipai').value + name;
document.getElementById('haipaiView').innerHTML = document.getElementById('haipaiView').innerHTML + src;
haipaiImgCnt++;
} else {
alert('配牌は完成しています');
}
}

var tehaiImgCnt = 0;
function selectTehai(name, src) {
if(tehaiImgCnt < 14) {
document.getElementById('tehai').value = document.getElementById('tehai').value + name;
document.getElementById('tehaiView').innerHTML = document.getElementById('tehaiView').innerHTML + src;
tehaiImgCnt++;
} else {
alert('手牌は完成しています');
}
}

function selectLast(src) {
document.getElementById('last').value = src;
document.getElementById('lastView').innerHTML = src;
}

/*
 * 選択リセット
 */
function resetDora() {
document.getElementById('dora').value = '';
document.getElementById('doraView').innerHTML = '<img src="img/ura.gif" style="visibility: hidden;" />';
}

function resetHaipai() {
document.getElementById('haipai').value = '';
document.getElementById('haipaiView').innerHTML = '<img src="img/ura.gif" style="visibility: hidden;" />';
haipaiImgCnt = 0;
}

function resetTehai() {
document.getElementById('tehai').value = '';
document.getElementById('tehaiView').innerHTML = '<img src="img/ura.gif" style="visibility: hidden;" />';
tehaiImgCnt = 0;
}

function resetLast() {
document.getElementById('last').value = '';
document.getElementById('lastView').innerHTML = '<img src="img/ura.gif" style="visibility: hidden;" />';
}

/*
 * 選択数チェック
 */
function checkHaipai() {
if(haipaiImgCnt < 13) {
	alert('配牌の数を確認して下さい。');
	return false;
}
return true;
}

function checktehai() {
if(tehaiImgCnt < 13) {
	alert('手牌の数を確認して下さい。');
	return false;
}
return true;
}

/*
 * タブ切り替え
 */
function changeTab1(){
	tab1.style.display="block";
	tab2.style.display="none";
	tabA.style.display="block";
	tabB.style.display="none";
}

function changeTab2(){
	tab1.style.display="none";
	tab2.style.display="block";
	tabA.style.display="none";
	tabB.style.display="block";
}
