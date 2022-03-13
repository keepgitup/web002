
<div>目前位置：首頁 > 分類網誌 > <span id="navTag"></span></div>
<div style="display:flex">
    <fieldset style="width:20%">
        <legend>分類項目</legend>
      <a><p class="tag">健康新知</p></a>
      <a><p class="tag">菸害防治</p></a>
      <a><p class="tag">癌症防治</p></a>
      <a><p class="tag">慢性病防治</p></a>
    </fieldset>
    <fieldset style="width:70%">
        <legend>文章列表</legend>

    </fieldset>
</div>


<script>
getlist(1)
$(".tag").on('click',function(){
    let navtag=$(this).text()
    $("#navTag").text(navtag)
    let type=$(this).data('type')
    getlist(type)
})

function getlist(type){
    $.get("api/getlist.php",{type},(list)=>{
        $("#newslist").html(list)
        $("#newslist").show()
        $("#news").hide();
    })
}
function getnews(id){
    $.get("api/getnews.php",{id},(news)=>{
        $("#news").html(news)
        $("#news").show()
        $("#newslist").hide()
    })
}


</script>