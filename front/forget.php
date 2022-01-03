<fieldset>
    <legend>忘記密碼</legend>
    <div>請輸入信箱以查詢密碼</div>
    <div><input type="text" name="email" id="email"></div>
    <div id="result"></div>
    <div><button onclick="find()">尋找</button></div>
</fieldset>
<script>
function find(){
// 不管結果如何 都給放網頁上
$.post("api/find_pw.php",{email:$("#email").val()},(result)=>{
// 就放在result上
$("#result").text(result)
    })
}
</script>