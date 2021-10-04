function check_name() {
	var name = document.getElementById("name").value;
	var error_name = document.getElementById("error_name");
	var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

	if (name.trim() == "" || name == null) {
		error_name.innerHTML = "Trường này không được để trống!";
	}else if (!regexName.test(name)) {
		error_name.innerHTML = "Dữ liệu nhập không hợp lệ!!";
	}else {
		error_name.innerHTML = "";
		return name;
	}
}
function check_firstName() {
	var firstName = document.getElementById("firstName").value;
	var error_firstName = document.getElementById("error_firstName");
	var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

	if (firstName.trim() == "" || firstName == null) {
		error_firstName.innerHTML = "Trường này không được để trống!";
	}else if (!regexName.test(firstName)) {
		error_firstName.innerHTML = "Dữ liệu nhập không hợp lệ!!";
	}else {
		error_firstName.innerHTML = "";
		return firstName;
	}
}
function check_lastName() {
	var lastName = document.getElementById("lastName").value;
	var error_lastName = document.getElementById("error_lastName");
	var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

	if (lastName.trim() == "" || lastName == null) {
		error_lastName.innerHTML = "Trường này không được để trống!";
	}else if (!regexName.test(lastName)) {
		error_lastName.innerHTML = "Dữ liệu nhập không hợp lệ!!";
	}else {
		error_lastName.innerHTML = "";
		return lastName;
	}
}
function check_userName() {
	var userName = document.getElementById("userName").value;
	var error_userName = document.getElementById("error_userName");
	var regexUserName = /^[A-Za-z0-9_-]{3,16}$/;

	if (userName.trim() == "" || userName == null) {
		error_userName.innerHTML = "Trường này không được để trống!";
	}else if (!regexUserName.test(userName)) {
		error_userName.innerHTML = "Dữ liệu nhập không hợp lệ!!";
	}else {
		error_userName.innerHTML = "";
		return userName;
	}
}
function check_phone() {
	var phone = document.getElementById("phone").value;
	var error_phone = document.getElementById("error_phone");
	var regexPhone = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;

	if (phone.trim() == "" || phone == null) {
		error_phone.innerHTML = "Số điện thoại không được để trống!";
	}else if (!regexPhone.test(phone)) {
		error_phone.innerHTML = "Số điện thoại nhập không hợp lệ!!";
	}else if (phone.length != 10 ) {
		error_phone.innerHTML = "Số điện thoại chỉ gồm 10 số!!!";
	}else {
		error_phone.innerHTML = "";
		return phone;
	}
}
function check_email() {
	var email = document.getElementById("email").value;
	var error_email = document.getElementById("error_email");
	var regexEmail = /\b[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,6}\b/i;

	if (email.trim() == "" || email == null) {
		error_email.innerHTML = "Email không được để trống!";
	}else if (!regexEmail.test(email)) {
		error_email.innerHTML = "Email nhập không hợp lệ!!";
	}else {
		error_email.innerHTML = "";
		return email;
	}
}
function check_passw() {
	var passw = document.getElementById("passw").value;
	var error_passw = document.getElementById("error_passw");
	//var regexPassw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
	var regexPassw = /^[a-zA-Z0-9\.]{6,}$/;

	if (passw == "" || passw == null) {
		error_passw.innerHTML = "Password không được để trống!";
	}else if (!regexPassw.test(passw)) {
		error_passw.innerHTML = "Password nhập không hợp lệ!!";
	}else {
		error_passw.innerHTML = "";
		return passw;
	}
}
function check_cPassw() {
	var passw = document.getElementById("passw").value;
	var cPassw = document.getElementById("cPassw").value;
	var error_cPassw = document.getElementById("error_cPassw");

	if (cPassw == "" || cPassw == null) {
		error_cPassw.innerHTML = "Password không được để trống!";
	}else if (cPassw != passw) {
		error_cPassw.innerHTML = "Password nhập không trùng khớp!";
	}else {
		error_cPassw.innerHTML = "";
		return cPassw;
	}
}

function check_email_login() {
	var email = document.getElementById("email_login").value;

	if (email.trim() != "") {
		return email;
	}
}
function check_passw_login() {
	var passw = document.getElementById("passw_login").value;

	if (passw != "") {
		return passw;
	}
}

/*--------------------Điều kiện form đánh giá sao--------------------*/
function check_summary() {
	var summary = document.getElementById("summary").value;
	var error_summary = document.getElementById("error_summary");

	if (summary.trim().length > 500) {
		error_summary.innerHTML = "Tóm tắt ngắn không quá 500 ký tự!";
	}else {
		error_summary.innerHTML = "";
		return summary;
	}
}
function check_rate() {
	var ratePoint = document.getElementById("ratePoint").value;
	var error_ratePoint = document.getElementById("error_ratePoint");

	if (ratePoint > 0) {
		error_ratePoint.innerHTML = "";
		return ratePoint;
	}else{
		error_ratePoint.innerHTML = "Trường này không được để trống!";
	}
}
function check_comment() {
	var comment = document.getElementById("comment").value;
	var error_comment = document.getElementById("error_comment");

	if (comment.trim() == "") {
		error_comment.innerHTML = "Trường này không được để trống!";
	}else {
		error_comment.innerHTML = "";
		return comment;
	}
}

function check_mess() {
	var mess = document.getElementById("mess").value;
	var error_mess = document.getElementById("error_mess");
	

	if (mess.trim() == "" || mess == null) {
		error_mess.innerHTML = "Trường này không được để trống!";
	}else {
		error_mess.innerHTML = "";
		return mess;
	}
}
function validate_mess(){
	if (check_name() && check_phone() && check_email() && check_mess() ) {
	}else {
		alert("Các thông tin chưa đầy đủ hoặc không hợp lệ! Mời kiểm tra lại!");
		return false;
	}
}

function validate_register(){
	if (check_firstName() && check_lastName() && check_userName() && check_phone() && check_email() && check_passw() && check_cPassw()) {
	}else {
		alert("Các thông tin chưa đầy đủ hoặc không hợp lệ! Mời kiểm tra lại!");
		return false;
	}
}

function validate_login(){
	if (check_email_login() && check_passw_login()) {
	}else {
		alert("Mời nhập đầy đủ thông tin!");
		return false;
	} 
}

function validate_order(){
	if (check_name() && check_phone() && check_email()) {
	}else {
		alert("Các thông tin chưa đầy đủ hoặc không hợp lệ! Mời kiểm tra lại!");
		return false;
	}
}

function validate_user(){
	if (check_firstName() && check_lastName() && check_userName() && check_phone() && check_email()) {
	}else {
		alert("Các thông tin chưa đầy đủ hoặc không hợp lệ! Mời kiểm tra lại!");
		return false;
	}
}

function validate_fm_rate() {
	if (check_rate() && check_summary() && check_comment()) {
	}else {
		alert("Các thông tin chưa đầy đủ hoặc không hợp lệ! Mời kiểm tra lại!");
		return false;
	}
}
