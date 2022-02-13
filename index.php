<div class="container">  
  <form id="contact" action="send_first_mail.php" method="post">
    <h3>إنشاء طلبك على فوشيا</h3>
    <h4>إنشأ طلبك ، واحصل على الرد خلال 24 ساعة!</h4>
    <fieldset>
      <input placeholder="الأسم الكامل" type="text" name="fullname" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="(+970xxxxxxxxx)" type="tel" name="telephone" tabindex="3" required>
    </fieldset>
    
    <table class="_table">
    <thead>
      <tr>
        <th>رابط المنتج</th>
        <th>وصف المنتج</th>
        <th width="50px">
          <div class="action_container">
            <button class="success" onclick="create_tr('table_body')">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </th>
      </tr>
    </thead>
    <tbody id="table_body">
      <tr>
        <td>
          <input type="text" name="productLink[]" class="form_control" placeholder="https://" >
        </td>
        <td>
          <input type="text" name="productDesc[]" class="form_control" placeholder="المقاس|اللون|رقم المنتج أو اي بيانات آخرى" >
        </td>
        <td>
          <div class="action_container">
            <button class="danger" onclick="remove_tr(this)">
              <i class="fa fa-close"></i>
            </button>
          </div>
        </td>
      </tr>
    </tbody>
  </table>   
    <fieldset>
      <textarea placeholder="أكتب ملاحظاتك...." tabindex="5" name="notes" required></textarea>
    </fieldset>
    
    <fieldset>
      <input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="أضغط هنا لإتمام الطلب">
    </fieldset>
  </form>
</div>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {

    font-family: Arial, Helvetica, sans-serif;
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
background-color: #efefef;
    padding: 25px;
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}

.container {
 max-width: 900px;
    width: 100%;
    background-color: #F9F9F9;
    margin: auto;
    padding: 15px;
    box-shadow: 0 2px 20px #0001, 0 1px 6px #0001;
    border-radius: 5px;
    overflow-x: auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}



._table {
    width: 100%;
    border-collapse: collapse;
}

._table :is(th, td) {
    border: 1px solid #0002;
    padding: 8px 10px;
}

/* form field design start */
.form_control {
    border: 1px solid #0002;
    background-color: transparent;
    outline: none;
    padding: 8px 12px;
    font-family: 1.2rem;
    width: 100%;
    color: #333;
    font-family: Arial, Helvetica, sans-serif;
    transition: 0.3s ease-in-out;
}

.form_control::placeholder {
    color: inherit;
    opacity: 0.5;
}

.form_control:is(:focus, :hover) {
    box-shadow: inset 0 1px 6px #0002;
}

/* form field design end */


.success {
    background-color: #24b96f !important;
}

.warning {
    background-color: #ebba33 !important;
}

.primary {
    background-color: #259dff !important;
}

.secondery {
    background-color: #00bcd4 !important;
}

.danger {
    background-color: #ff5722 !important;
}

.action_container {
    display: inline-flex;
}

.action_container>* {
    border: none;
    outline: none;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    padding: 8px 14px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.action_container>*+* {
    border-left: 1px solid #fff5;
}

.action_container>*:hover {
    filter: hue-rotate(-20deg) brightness(0.97);
    transform: scale(1.05);
    border-color: transparent;
    box-shadow: 0 2px 10px #0004;
    border-radius: 2px;
}

.action_container>*:active {
    transition: unset;
    transform: scale(.95);
}

</style>











<script>


function create_tr(table_id) {
    let table_body = document.getElementById(table_id),
        first_tr   = table_body.firstElementChild
        tr_clone   = first_tr.cloneNode(true);

    table_body.append(tr_clone);

    clean_first_tr(table_body.firstElementChild);
}

function clean_first_tr(firstTr) {
    let children = firstTr.children;
    
    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x=>{
        if(x !== firstTr.lastElementChild)
        {
            x.firstElementChild.value = '';
        }
    });
}



function remove_tr(This) {
    if(This.closest('tbody').childElementCount == 1)
    {
        alert("You Don't have Permission to Delete This ?");
    }else{
        This.closest('tr').remove();
    }
}

</script>